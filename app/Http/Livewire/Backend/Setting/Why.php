<?php

namespace App\Http\Livewire\Backend\Setting;
use App\Models\Backend\Setting\Why as WhyInfo;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class Why extends Component
{
    use WithFileUploads;

    public $description;
    public $title;
    public $image;
    public $is_active=1;
    public $WhyId;
    public $DeleteId;
    public $QueryUpdate;

    public function ConfirmDelete(){
        $this->whyDelete($this->DeleteId);
        $this->reset(['DeleteId']);
        $this->emit('modal', 'DeletePopup');
    }
    public function DeleteModal($id){
        $this->DeleteId=$id;
        $this->emit('modal', 'DeletePopup');
    //   dd($id);
    }
    public function whyEdit($id)
    {
        $QueryUpdate = WhyInfo::find($id);
        $this->WhyId = $QueryUpdate->id;
        $this->title = $QueryUpdate->title;
        $this->description = $QueryUpdate->description;
        $this->is_active = $QueryUpdate->is_active;
		$this->emit('modal', 'why');
    }
    public function whyDelete($id)
    {
        WhyInfo::find($id)->delete();

        $this->emit('success', [
            'text' => 'Why Deleted Successfully',
        ]);
    }
    public function whySave()
    {
        $this->validate([
            'description' => 'required',
            'title' => 'required',
            'is_active' => 'required'
        ]);
        if ($this->WhyId) {
            $Query = WhyInfo::find($this->WhyId);
        } else {
            $Query = new WhyInfo();
            $Query->created_by = Auth::id();
        }
        if ($this->image) {
            if ($Query->image) {
                Storage::delete($Query->image);
            }
            $path = $this->image->store('/public/photo');
            $Query->image = basename($path);
        }
        $Query->title = $this->title;
        $Query->description = $this->description;
        $Query->branch_id = Auth::user()->branch_id;
        $Query->is_active = $this->is_active;
        $Query->save();

        $this->reset();
        $this->whyModal();

        $this->emit('success', [
            'text' => 'Why C/U Successfully',
        ]);
    }

    public function whyModal(){
        $this->reset();
        $this->emit('modal','why');
    }
    public function render()
    {
        return view('livewire.backend.setting.why');
    }
}
