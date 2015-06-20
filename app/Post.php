<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Lanz\Commentable\Commentable;

class Post extends Model {

    use Commentable;

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
