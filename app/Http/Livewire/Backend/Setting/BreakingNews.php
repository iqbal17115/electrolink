<?php

namespace App\Http\Livewire\Backend\Setting;
use App\Models\Backend\Setting\BreakingNews as BreakingNewsInfo;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class BreakingNews extends Component
{
    use WithFileUploads;

    public $news;
    public $title;
    public $image1;
    public $is_active=1;
    public $BreakingNewsId;
    public $DeleteId;
    public $QueryUpdate;

    public function ConfirmDelete(){
        $this->newsDelete($this->DeleteId);
        $this->reset(['DeleteId']);
        $this->emit('modal', 'DeletePopup');
    }
    public function DeleteModal($id){
        $this->DeleteId=$id;
        $this->emit('modal', 'DeletePopup');
    //   dd($id);
    }
    public function newsEdit($id)
    {
        $QueryUpdate = BreakingNewsInfo::find($id);
        $this->BreakingNewsId = $QueryUpdate->id;
        $this->title = $QueryUpdate->title;
        $this->news = $QueryUpdate->news;
        $this->is_active = $QueryUpdate->is_active;
		$this->emit('modal', 'breakingNews');
    }
    public function newsDelete($id)
    {
        BreakingNewsInfo::find($id)->delete();

        $this->emit('success', [
            'text' => 'News Deleted Successfully',
        ]);
    }
    public function breakingNewsSave()
    {
        $this->validate([
            'news' => 'required',
            'title' => 'required',
            'is_active' => 'required'
        ]);
        if ($this->BreakingNewsId) {
            $Query = BreakingNewsInfo::find($this->BreakingNewsId);
        } else {
            $Query = new BreakingNewsInfo();
            $Query->created_by = Auth::id();
        }
        if ($this->image1) {
            if ($Query->image1) {
                Storage::delete($Query->image1);
            }
            $path = $this->image1->store('/public/photo');
            $Query->image1 = basename($path);
        }
        $Query->title = $this->title;
        $Query->news = $this->news;
        $Query->branch_id = Auth::user()->branch_id;
        $Query->is_active = $this->is_active;
        $Query->save();

        $this->reset();
        $this->breakingNewsModal();

        $this->emit('success', [
            'text' => 'News C/U Successfully',
        ]);
    }

    public function breakingNewsModal(){
        $this->reset();
        $this->emit('modal','breakingNews');
    }
    public function render()
    {
        return view('livewire.backend.setting.breaking-news');
    }
}
