<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Blog;

class PublicPagesTest extends TestCase
{
    use RefreshDatabase;

    public function test_home_page_is_accessible()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function test_about_page_is_accessible()
    {
        $response = $this->get('/about');
        $response->assertStatus(200);
    }

    public function test_services_page_is_accessible()
    {
        $response = $this->get('/services');
        $response->assertStatus(200);
    }

    public function test_training_page_is_accessible()
    {
        $response = $this->get('/training');
        $response->assertStatus(200);
    }

    public function test_contact_page_is_accessible()
    {
        $response = $this->get('/contact');
        $response->assertStatus(200);
    }

    public function test_blog_page_is_accessible()
    {
        $response = $this->get('/blog');
        $response->assertStatus(200);
    }

    public function test_single_blog_page_is_accessible()
    {
        $blog = Blog::create([
            'title' => 'Test Blog',
            'slug' => 'test-blog',
            'content' => 'This is a test blog content.',
            'category' => 'Testing',
        ]);

        $response = $this->get('/blog/' . $blog->slug);
        $response->assertStatus(200);
    }
}
