<?php include("header.php"); ?>
    
    <style type="text/css">
        body{
            background-color: rgb(155, 154, 154);
        }
        
  .slider-wrapper {
    position: relative;
  }
  
  .slider-wrapper .slide-button {
    position: absolute;
    top: 50%;
    outline: none;
    border: none;
    height: 50px;
    width: 50px;
    z-index: 5;
    color: #fff;
    display: flex;
    cursor: pointer;
    font-size: 2.2rem;
    background: #000;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    transform: translateY(-50%);
  }
  
  .slider-wrapper .slide-button:hover {
    background: #404040;
  }
  
  .slider-wrapper .slide-button#prev-slide {
    left: -25px;
    display: none;
  }
  
  .slider-wrapper .slide-button#next-slide {
    right: -25px;
  }
  
  .slider-wrapper .image-list {
    display: grid;
    grid-template-columns: repeat(10, 1fr);
    gap: 18px;
    font-size: 0;
    list-style: none;
    margin-bottom: 30px;
    overflow-x: auto;
    scrollbar-width: none;
  }
  
  .slider-wrapper .image-list::-webkit-scrollbar {
    display: none;
  }
  
  .slider-wrapper .image-list .image-item {
    width: 325px;
    height: 400px;
    object-fit: cover;
  }
  
  .container .slider-scrollbar {
    height: 24px;
    width: 100%;
    display: flex;
    align-items: center;
  }
  
  .slider-scrollbar .scrollbar-track {
    background: #ccc;
    width: 100%;
    height: 2px;
    display: flex;
    align-items: center;
    border-radius: 4px;
    position: relative;
  }
  
  .slider-scrollbar:hover .scrollbar-track {
    height: 4px;
  }
  
  .slider-scrollbar .scrollbar-thumb {
    position: absolute;
    background: #000;
    top: 0;
    bottom: 0;
    width: 50%;
    height: 100%;
    cursor: grab;
    border-radius: inherit;
  }
  
  .slider-scrollbar .scrollbar-thumb:active {
    cursor: grabbing;
    height: 8px;
    top: -2px;
  }
  
  .slider-scrollbar .scrollbar-thumb::after {
    content: "";
    position: absolute;
    left: 0;
    right: 0;
    top: -10px;
    bottom: -10px;
  }
  
  /* Styles for mobile and tablets */
  @media only screen and (max-width: 1023px) {
    .slider-wrapper .slide-button {
      display: none !important;
    }
  
    .slider-wrapper .image-list {
      gap: 10px;
      margin-bottom: 15px;
      scroll-snap-type: x mandatory;
    }
  
    .slider-wrapper .image-list .image-item {
      width: 280px;
      height: 380px;
    }
  
    .slider-scrollbar .scrollbar-thumb {
      width: 20%;
    }
  }
    </style>
    
    
  
<body>
   <div class="bgPhoto">
    
   <?php include("slider.php"); ?>
   
<a href="Programs.php" class="btn"></a></div>
<hr>
        
        <div class="photos">
            <div class="rubrika">
                <img src="images/PersonalTraining.jpg " alt="" class="img anim"></div>
              <div class="Paragraf">
                <h1> PersonalFitt</h1>
                
                <p>A personal trainer is an individual who creates and delivers
                    safe and effective exercise<br>
                     programs for healthy individuals and groups, <br>or those with medical clearance to exercise.</p>
            </div>
            
            <div class="rubrika">
                <img src="images/CrossFit.jpg " alt="" class="img anim"></div>
              <div class="Paragraf">
                <h1>BasicClass</h1>
                <p>A personal trainer is an individual who creates and delivers safe and effective exercise<br>
                     programs for healthy individuals and groups, or those with medical clearance to exercise.</p>
            </div>
            
            <div class="rubrika">
                <img src="images/Yoga.jpg " alt="" class="img anim" ><br></div>
                <div class="Paragraf">
                <h1>YogaClass</h1>
                <p>A personal trainer is an individual who creates and delivers safe and effective exercise<br>
                     programs for healthy individuals and groups, or those with medical clearance to exercise.</p>
                
            </div>
           

            <div class="rubrika">
                <img src="images/Pilates.jpg " alt="" class="img anim"></div>
                <div class="Paragraf">
                    <h1>PilateClass</h1>
                <p>A personal trainer is an individual who creates and delivers safe and effective exercise<br>
                     programs for healthy individuals and groups, or those with medical clearance to exercise.</p>
            
            </div>
</body>
</html>