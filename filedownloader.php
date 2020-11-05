<!DOCTYPE html>
<html>
    <head>
        <title>PHP File Downloader</title>
    </head>
    <body>
        
        <?php
        if(isset($_POST["url"])){
            $url = $_POST["url"]; 
            $directory = $_POST["directory"];
            
            if($url != ""){
                
                $dirname = "";
                
                if($directory != ""){
                    if(!file_exists($directory))
	                    mkdir($directory);
	                $dirname = $directory . "/";
                }
                
                $file_name = $dirname . basename($url); 
                   
                if(file_put_contents( $file_name,file_get_contents($url))) { 
                    echo "File downloaded successfully"; 
                }
                else { 
                    echo "File downloading failed."; 
                } 
            }
        }
        ?>
        
        <h1>PHP File Downloader</h1>
        <p>This program will help you to download a file from any url to a directory inside your server</p>
        <form method="post">
            <label>File URL to download</label>
            <input name="url">
            <label>Target Directory</label>
            <input name="directory">
            <input type="submit" value="Download">
        </form>
    </body>
</html>