<?php
use Gaceta\Repositories\PostRepo;

class SitemapController extends BaseController{

    protected $postRepo;


    public function __construct(PostRepo $postRepo)
    {
        $this->postRepo 		= $postRepo;
    }

    public function sitemapGenerator(){
        // create new sitemap object
        $sitemap = App::make("sitemap");


        // add items to the sitemap -- Sections and other pages --
        $sitemap->add(route('home'), '2015-02-11T13:28:11-06:00', '1', 'weekly');
        $sitemap->add(route('section', 'gestion'), '2015-02-11T13:28:11-06:00', '1', 'weekly');
        $sitemap->add(route('section', 'docencia'),  '2015-02-11T13:28:11-06:00', '1', 'weekly');
        $sitemap->add(route('section', 'investigacion'),  '2015-02-11T13:28:11-06:00', '1', 'weekly');
        $sitemap->add(route('section', 'extension'), '2015-02-11T13:28:11-06:00', '1', 'weekly');
        $sitemap->add(route('section', 'anuncios'), '2015-02-11T13:28:11-06:00', '1', 'weekly');
        $sitemap->add(route('section', 'colaboraciones'), '2015-02-11T13:28:11-06:00', '1', 'weekly');
        $sitemap->add(route('section', 'galeria-de-fotos'), '2015-02-11T13:28:11-06:00', '1', 'weekly');
        $sitemap->add(route('section', 'gaceta'), '2015-02-11T13:28:11-06:00', '1', 'weekly');
        $sitemap->add(route('mensaje'), '2015-02-11T13:28:11-06:00', '1', 'weekly');

        // get all posts from db
        $posts = $this->postRepo->getList();

        // add every post to the sitemap
        foreach ($posts as $post)
        {
            $post_url = route('post', [$post->section()->first()->slug_url, $post['slug_url'], $post['id']]);

            $sitemap->add($post_url, $post->updated_at, '1', 'weekly');
        }

        // generate your sitemap (format, filename)
        return $sitemap->render('xml');
        // this will generate file mysitemap.xml to your public folder

    }
}