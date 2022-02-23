<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ViewMoviesTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
   public function main_page_info_show_correct()
    {
        $response = $this->get(route('movies.index'));
        $response->assertSuccessful();
    }
}
