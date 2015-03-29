<?php namespace ImgWhoop\Http\Controllers;

use ImgWhoop\Http\Requests;
use ImgWhoop\Http\Controllers\Controller;
use Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use ImgWhoop\Category;
use ImgWhoop\Image;

class ImageController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}
        /**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
        public function getImageGallery()
        {
            
        }
        /**
	 * renders Image upload view.
	 *
	 * @return Response
	 */
        public function getImageUploadView()
        {
            $view = view('images.uploadImage');
            $view->categories = array(''=> 'Select') + 
                                Category::lists('category','id');
            return $view;
        }
        /**
	 * Post Image upload function.
	 *
	 * @return Response
	 */
        public function postImageUpload(Request $request) {
            $view = view('images.uploadImage');
            $this->validate($request, [
                'title' => 'required',
                'description' => 'required',
                'image' => 'required|image',
                'category_id' => 'required'
            ]);
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $file->move('uploads', $file->getFilename() . '.' . $extension);
                
                $image = Image::create(array(
                        'user_id' => Auth::user()->id,
                        'category_id' => $request->input('category_id'),
                        'image' => $file->getFilename() . '.' . $extension,
                        'description' => $request->input('description')
                ));
                
                Session::flash('global', 'Image Uploaded Sccuessfully');
            } else {
                Session::flash('global', 'Image not selected');
            }
            $view->categories = array(''=> 'Select') + 
                                Category::lists('category','id');
            
            return $view;
        }

}
