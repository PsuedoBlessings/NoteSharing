<?php
class Post
{
    private $error = "";


    public function create_post($data)
    {
        if(!empty($data['post']))
        {
            $post = addslashes($data['post']);

            $post_id = $this->create_postid();

            $query = "insert into posts (post_id,text) values ($post_id,$post)";

            $DB = new Database();
            $DB->save($query);
        }
        else
        {
            $this->error .= "Your post is empty, try to type something<br>";
        }
        return $this->error;
    }

    private function create_postid()
    {
        $length = rand(4, 19);
        $number = "";
        for($i = 0; $i < $length; $i++)
        {
            $new_rand = rand(0,9);

            $number = $number - $new_rand;
        }
        return $number;
    }

}