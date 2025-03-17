<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo base_url('assets/img/title logo.png'); ?>">
    <title>Add Music</title>
</head>
<body>
<form action="<?= base_url('ui/Home/add_music'); ?>" method="post" enctype="multipart/form-data">
    <label for="music_name">Name:</label>
    <input type="text" id="music_name" name="music_name" required>
    
    <label for="genre">Genre:</label>
    <input type="text" id="genre" name="genre" required>
    
    <label for="artist">Artist:</label>
    <input type="text" id="artist" name="artist" required>
    
    <label for="img">Image:</label>
    <input type="file" id="img" name="img" accept="image/*" required> 
    
    <label for="song">Music:</label>
    <input type="file" id="song" name="song" accept="audio/*" required> 
    
    <button type="submit">Submit</button>
</form>
</body>
</html> 