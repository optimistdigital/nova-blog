<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIncludeInBloglistToPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $postsTable = config('nova-blog.blog_posts_table', 'nova_blog_posts');

        Schema::table($postsTable, function (Blueprint $table) {
            $table->boolean('include_in_bloglist')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $postsTable = config('nova-blog.blog_posts_table', 'nova_blog_posts');

        Schema::table($postsTable, function (Blueprint $table) {
            $table->dropColumn('include_in_bloglist');
        });
    }
}
