<?php

namespace App\Http\Livewire\Backend\Setting;
use App\Models\Backend\Setting\Testimonial as TestimonialInfo;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Testimonial extends Component
{

    public $name;
    public $title;
    public $description;
    public $is_active=1;
    public $TestimonialId;
    public $DeleteId;
    public $QueryUpdate;

    public function ConfirmDelete(){
        $this->testimonialDelete($this->DeleteId);
        $this->reset(['DeleteId']);
        $this->emit('modal', 'DeletePopup');
    }
    public function DeleteModal($id){
        $this->DeleteId=$id;
        $this->emit('modal', 'DeletePopup');
    //   dd($id);
    }
    public function testimonialEdit($id)
    {
        $QueryUpdate = TestimonialInfo::find($id);
        $this->TestimonialId = $QueryUpdate->id;
        $this->name = $QueryUpdate->name;
        $this->title = $QueryUpdate->title;
        $this->description = $QueryUpdate->description;
        $this->is_active = $QueryUpdate->is_active;
		$this->emit('modal', 'testimmonialNews');
    }
    public function testimonialDelete($id)
    {
        TestimonialInfo::find($id)->delete();

        $this->emit('success', [
            'text' => 'Testimonial Deleted Successfully',
        ]);
    }
    public function breakingNewsSave()
    {
        $this->validate([
            'name' => 'required',
            'title' => 'required',
            'description' => 'required',
            'is_active' => 'required'
        ]);
        if ($this->TestimonialId) {
            $Query = TestimonialInfo::find($this->TestimonialId);
        } else {
            $Query = new TestimonialInfo();
            $Query->created_by = Auth::id();
        }
        $Query->name = $this->name;
        $Query->title = $this->title;
        $Query->description = $this->description;
        $Query->branch_id = Auth::user()->branch_id;
        $Query->is_active = $this->is_active;
        $Query->save();

        $this->reset();
        $this->testimonialModal();

        $this->emit('success', [
            'text' => 'Testimonial C/U Successfully',
        ]);
    }

    public function testimonialModal(){
        $this->reset();
        $this->emit('modal','testimmonialNews');
    }

    public function render()
    {
        return view('livewire.backend.setting.testimonial');
    }
}
