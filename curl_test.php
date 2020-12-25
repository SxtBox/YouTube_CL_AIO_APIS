<?php
// UPLOAD IT IN WWW-DATA AND TEST
if  (in_array  ('curl', get_loaded_extensions())) {
 
        echo "CURL is Enabled on This Server";
 
    }  else {
        echo "CURL is not Enabled on This Server";
    }
?>