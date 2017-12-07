<?php

namespace App\Http\Controllers;

use App\BlogPost;
use App\Like;
use App\Tag;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'alle posts';
    }


    public function getAdminIndex()
    {
        $blogposts = BlogPost::orderBy('created_at', 'desc')->paginate(9);
        return view("admin.index", ['blogposts' => $blogposts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //$this->middleware("auth");
        //$request->user()->authorizeRoles(['admin']);

        $tags = Tag::all();
        return view("blogpost.create", ['tags' => $tags]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:5',
            'content' => 'required|min:10'
        ]);

        $blogpost = new BlogPost();

        $blogpost->title = $request->input("title");
        $blogpost->content = $request->input("content");

        $blogpost->save();

        $blogpost->tags()->attach($request->input('tags') === null ? [] : $request->input('tags'));

        return redirect()->route('admin.index')->with('info', 'item created, title is' . $request->input('title') . $request->input('content'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blogpost  $blogpost
     * @return \Illuminate\Http\Response
     */
    public function show(BlogPost $blogpost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blogpost  $blogpost
     * @return \Illuminate\Http\Response
     */
    public function edit(BlogPost $blogpost)
    {
        $tags = Tag::all();
        return view("admin.edit", ["editBlogPost" => $blogpost, 'tags' => $tags]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blogpost  $blogpost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BlogPost $blogpost)
    {
        return "hier wordt geupdate";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blogpost  $blogpost
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlogPost $blogpost)
    {
        //
    }


    public function postLike(Request $request)
    {
        $blog_post_id = $request->input("blog_post_id");

        $blogpost = BlogPost::find($blog_post_id);
        $like = new Like();
        $blogpost->likes()->save($like);

        return redirect()->back();
    }

}
