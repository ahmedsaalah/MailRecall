<?php

class MY_Loader extends CI_Loader {
    public function template($template_name, $vars = array(), $return = FALSE)
    {
        if($return):
        $content  = $this->view('templates/main', $vars);
        $content .= $this->view('templates/side_bar', $vars);
        $content .= $this->view($template_name, $vars, $return);
        $content .= $this->view('templates/footer', $vars, $return);

        return $content;
    else:
        $this->view('templates/main', $vars);
        $this->view('templates/side_bar', $vars);
        $this->view($template_name, $vars); 
        $this->view('templates/footer', $vars);
    endif;
    }
}
