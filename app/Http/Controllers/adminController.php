<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blog; // Corrected the namespace
use App\Models\Blogs;

class AdminController extends Controller
{
    public function index()
    {
        $blog = Blogs::all(); // Retrieve all posts from the database
        return view('blog')->with('blogArray', $blog);
    }

    public function about()
    {
        $name = "Somsamay Khanthavong";
        $DevDate_at = "23/9/2024";
        return view('about')->with(['name' => $name, 'DevDate_at' => $DevDate_at]);
    }

    public function writeBlog()
    {
        return view('WriteBlog');
    }

    public function insertBlog(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'status' => 'required|integer|in:1,2,3',
        ], [
            'title.required' => 'The title is required. Please provide a title for your blog post.',
            'title.string' => 'The title must be a string.',
            'title.max' => 'The title may not be greater than 255 characters.',
            'content.required' => 'The content is required. Please provide content for your blog post.',
            'content.string' => 'The content must be a string.',
            'status.required' => 'The status is required. Please select a status for your blog post.',
            'status.integer' => 'The status must be an integer value.',
            'status.in' => 'The selected status is invalid. Please choose a valid status (1 for Deploy, 2 for Draft, 3 for Die).',
        ]);

        // Insert the blog post into the database
        Blogs::create([
            'title' => $request->title,
            'content' => $request->content,
            'status' => $request->status,
        ]);

        // Optionally, redirect or return a response after insertion
        return redirect()->route('blog.index')->with('success', 'Blog post created successfully!');
    }
}
