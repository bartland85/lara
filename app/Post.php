<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Post extends Model {

    protected $table = 'posts';

    public function fetchRequest(Request $request)
    {
        $this->title = $request->input('title');
        $this->text = $request->input('text');
        $this->user_id = Auth::user()->id;
        $this->author = Auth::user()->name;
        $this->adult = $request->input('adult');
    }

    public function forAdults()
    {
        return (bool)$this->adult;
    }

}
