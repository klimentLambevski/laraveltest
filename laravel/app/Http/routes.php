<?php
use Swagger\Annotations as SWG;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/**
 * @SWG\Resource(
 *     apiVersion="0.2",
 *     resourcePath="/photo",
 *     basePath="http://localhost",
 *     @SWG\Api(
 *          path="/photo",
 *          description="Test get photo",
 *          @SWG\Operation(
 *              method="GET",
 *              summary="Get all photos",
 *              nickname="getAllPhotos",
 *              type="Test",
 *              @SWG\ResponseMessage(code=200, message="No error")
 *          ),
 *          @SWG\Operation(
 *              method="POST",
 *              summary="Create new photo",
 *              nickname="createPhoto",
 *              type="Test",
 *              @SWG\ResponseMessage(code=200, message="Success"),
 *              @SWG\Parameter(
 *                  name="PhotoName",
 *                  description="Name of the photo",
 *                  paramType="form",
 *                  required=true,
 *                  allowMultiple=false,
 *                  type="string"
 *              )
 *          )
 *     )
 * )
 * @SWG\Model(
 *     id="Test",
 *     required="['test']",
 *     @SWG\Property(name="test",type="string")
 * )
 */
Route::resource('photo', 'PhotoController');

Route::get('/test', function () {
    return getenv('APP_ENV');
});
