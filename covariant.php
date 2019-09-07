<?php
interface postInterface
{
    public function setPost(Post $post);

    public function getPost(): Post;
}

class Post
{
    private string $title;
    private string $body;

    /**
     * @param string $title
     */
    public function setTitle(string $title): void {
        $this->title = $title;
    }

    /**
     * @param string $body
     */
    public function setBody(string $body): void {
        $this->body = $body;
    }

}

class PostRepository implements postInterface
{
    protected Post $post;

    public function setPost(Post $post) {
        $this->post = $post;
    }

    public function getPost(): Post {
        return $this->post;
    }
}



$post = new Post();
$post->setTitle('php7.4');
$post->setBody('Bla BLa');
$post_repo = new PostRepository();
$post_repo->setPost($post);
print_r($post_repo->getPost());