<?php

/**
 * Class Songs
 * This is a demo class.
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Comments extends Controller
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/songs/index
     */
    public function index()
    {

        $amount_of_comments = $this->model->getAmountOfComments();

       // load views. within the views we can echo out $songs and $amount_of_songs easily
        require APP . 'view/_templates/header.php';
        require APP . 'view/comments/index.php';
        require APP . 'view/_templates/footer.php';
    }

    /**
     * ACTION: addSong
     * This method handles what happens when you move to http://yourproject/songs/addsong
     * IMPORTANT: This is not a normal page, it's an ACTION. This is where the "add a song" form on songs/index
     * directs the user after the form submit. This method handles all the POST data from the form and then redirects
     * the user back to songs/index via the last line: header(...)
     * This is an example of how to handle a POST request.
     */
    public function addComment()
    {
        // if we have POST data to create a new song entry
        if (isset($_POST["submit_add_comment"])) {
            // do addSong() in model/model.php
            $this->model->addComment($_POST["comments_body"], $_POST["article_id"]);
        }

        // where to go after song has been added
        header('location: ' . URL . 'comments/index');
    }

    /**
     * ACTION: deleteSong
     * This method handles what happens when you move to http://yourproject/songs/deletesong
     * IMPORTANT: This is not a normal page, it's an ACTION. This is where the "delete a song" button on songs/index
     * directs the user after the click. This method handles all the data from the GET request (in the URL!) and then
     * redirects the user back to songs/index via the last line: header(...)
     * This is an example of how to handle a GET request.
     * @param int $song_id Id of the to-delete song
     */
    public function deleteComment($comment_id)
    {
        // if we have an id of a song that should be deleted
        if (isset($comment_id)) {
            // do deleteSong() in model/model.php
            $this->model->deleteComment($comment_id);
        }

        // where to go after song has been deleted
        header('location: ' . URL . 'comment/index');
    }

     /**
     * ACTION: editSong
     * This method handles what happens when you move to http://yourproject/songs/editsong
     * @param int $song_id Id of the to-edit song
     */
    public function editComment($comment_id)
    {
        // if we have an id of a song that should be edited
        if (isset($comment_id)) {
            // do getSong() in model/model.php
            $comment = $this->model->getComment($comment_id);

            // in a real application we would also check if this db entry exists and therefore show the result or
            // redirect the user to an error page or similar

            // load views. within the views we can echo out $song easily
            require APP . 'view/_templates/header.php';
            require APP . 'view/comments/edit.php';
            require APP . 'view/_templates/footer.php';
        } else {
            // redirect user to songs index page (as we don't have a song_id)
            header('location: ' . URL . 'comments/index');
        }
    }
    
    /**
     * ACTION: updateSong
     * This method handles what happens when you move to http://yourproject/songs/updatesong
     * IMPORTANT: This is not a normal page, it's an ACTION. This is where the "update a song" form on songs/edit
     * directs the user after the form submit. This method handles all the POST data from the form and then redirects
     * the user back to songs/index via the last line: header(...)
     * This is an example of how to handle a POST request.
     */
    public function updateComment()
    {
        // if we have POST data to create a new song entry
        if (isset($_POST["submit_update_comment"])) {
            // do updateSong() from model/model.php
            $this->model->updateComment($_POST["comment"]);
        }

        // where to go after song has been added
        header('location: ' . URL . 'comments/index');
    }

    /**
     * AJAX-ACTION: ajaxGetStats
     * TODO documentation
     */
    public function ajaxGetStats()
    {
        $amount_of_comments = $this->model->getAmountOfComments();

        // simply echo out something. A supersimple API would be possible by echoing JSON here
        echo $amount_of_commnets;
    }

}