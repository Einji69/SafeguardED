<!DOCTYPE html>
<html>
<head>
  <title>Play It Yourself</title>
  <style type="text/css">
    .lightbox {
      display: table; /* helps us center the lightbox-content */
      opacity: 0; /* fully transparent (hidden) */
      z-index: -1; /* put the lightbox layer below the body */
      transition-duration: 1s; /* duration of the fade in effect */
   
      /* make the lightbox occupy the entire page */
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.7); /* black with 0.7 opacity */
    }
    .lightbox:target {
      opacity: 1; /* fully opaque (visible) */
      z-index: 5; /* put the lightbox layer above the body */
    }
    .lightbox-content {
      display: table-cell;
      vertical-align: middle; /* vertically center */
      text-align: center; /* horizontally center */
    }
    .close {
      /* position the CLOSE button to the top-right corner */
      position: absolute;
      top: 10px;
      right: 10px;
   
      /* style the close button */
      font-size: 20px;
      font-weight: 300;
      text-decoration: none;
      color: white;
    }
   
    /* make the image responsive */
    img {
      max-width: 10%;
      height: auto;
    }
  </style>
</head>
<body>
<table>
<tr>
<th>Kim</th>
<th>Kim2</th>
</tr>
<tr>
  <td><a href="#example"> No 1 </a>
  <div class="lightbox" id="example">
    <a href="#" class="close">CLOSE</a>
    <div class="lightbox-content">
      <img src="medicalrecords\1719712627_Psyc.jpg" />
    </div>
  </div>
</td>

<td><a href="#example2"> No 2 </a>
  <div class="lightbox" id="example2">
    <a href="#" class="close">CLOSE</a>
    <div class="lightbox-content">
      <img src="medicalrecords\medicalcertificate\1719712215_Arch.jpg" />
    </div>
  </div>
</td>

</tr>
</body>
</html>