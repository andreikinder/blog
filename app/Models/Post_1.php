<?php


namespace App\Models;


////use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter;
class Post1 //extends Model
{
//    use HasFactory;

    public $title;

    public $exerpt;

    public $date;

    public $body;

    public $slug;

    /**
     * Post constructor.
     * @param $title
     * @param $exerpt
     * @param $date
     * @param $body
     */
    public function __construct($title, $exerpt, $date, $body, $slug)
    {
        $this->title = $title;
        $this->date = $date;
        $this->exerpt = $exerpt;
        $this->body = $body;
        $this->slug = $slug;
    }


    public static function all()
    {
        return  cache()->rememberForever('posts.all', function (){
            return collect(File::files(resource_path("posts/")))
                ->map(fn($file) =>  YamlFrontMatter\YamlFrontMatter::parseFile($file))
                ->map(fn($document) => new Post1(
                    $document->title,
                    $document->exerpt,
                    $document->date,
                    $document->body(),
                    $document->slug))
                ->sortByDesc('date');
        });

    }

    public static function find($slug)
    {
        return  static::all()->firstWhere('slug', $slug);

    }

    public static function findOrFail($slug)
    {
        $post =  static::find( $slug);
        if( !$post )  throw new ModelNotFoundException();
        return $post;
    }
}
