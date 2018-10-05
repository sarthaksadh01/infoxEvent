<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <title>Crptox-LB</title>
    <style>
    body {
  width: 100%;
  max-width: 1070px;
  margin: 200px auto;
  font-family: "Roboto", sans-serif;
  background: #ccc;
}
#leaderboards {
  font-size: 0;
}
#leaderboards > * {
  position: relative;
  font-size: 14px;
  display: inline-block;
}
#leaderboards .toplist {
  padding: 0;
  margin: 0;
  list-style: none;
}
#leaderboards .options {
  width: 28%;
}
#leaderboards .options .search {
  background: #8F2885;
  display: block;
  width: 100%;
  padding: 20px 20px 20px 53px;
  box-sizing: border-box;
  outline: none;
  border: none;
  border-radius: 6px;
  color: white;
  font-weight: bold;
  position: relative;
  font-family: "Roboto", sans-serif;
  box-shadow: 0 4px #7A2271;
}
#leaderboards .options .search + i:before {
  content: "\f002";
  font-family: FontAwesome;
  position: absolute;
  font-style: normal;
  top: 17px;
  left: 20px;
  font-size: 18px;
  color: white;
}
#leaderboards .options .sort {
  padding: 20px;
  background: #8F2885;
  border-radius: 6px;
  margin-top: 14px;
  cursor: default;
  box-shadow: 0 4px #7A2271;
}
#leaderboards .options .sort h2 {
  text-align: center;
  margin: 10px 0 25px;
  text-transform: uppercase;
  color: white;
  text-shadow: 2px 2px 3px rgba(0,0,0,0.15);
  font-size: 16px;
}
#leaderboards .options .sort .tabTitles > span {
  text-transform: uppercase;
  padding: 10px 20px;
  border-top-left-radius: 6px;
  border-top-right-radius: 6px;
  display: inline-block;
  font-weight: bold;
  color: rgba(255,255,255,0.5);
  font-size: 12px;
  cursor: pointer;
  transition: .25s;
}
#leaderboards .options .sort .tabTitles > span:hover {
  color: rgba(255,255,255,0.75);
}
#leaderboards .options .sort .tabTitles > .active {
  color: white !important;
  background: #7A2271;
  pointer-events: none;
  cursor: default;
  box-shadow: 0 5px #7A2271;
}
#leaderboards .options .sort .tabContents {
  background: #7A2271;
  padding: 20px;
  border-radius: 6px;
  list-style: none;
  position: relative;
  height: 105px;
}
#leaderboards .options .sort .tabContents .tab {
  position: absolute;
  top: 20px;
  left: 20px;
  opacity: 0;
  visibility: hidden;
  transition: .25s;
}
#leaderboards .options .sort .tabContents .tab.active {
  opacity: 1;
  visibility: visible;
}
#leaderboards .options .sort .tabContents .tab > label {
  display: block;
  font-weight: bold;
  margin-bottom: 7px;
  color: rgba(255,255,255,0.5);
  cursor: pointer;
  transition: .25s;
}
#leaderboards .options .sort .tabContents .tab > label:before {
  content: "\f10c";
  font-family: FontAwesome;
  font-weight: 100;
  margin-right: 17px;
}
#leaderboards .options .sort .tabContents .tab > input:checked + label {
  color: white;
}
#leaderboards .options .sort .tabContents .tab > input:checked + label:before {
  content: "\f111";
}
#leaderboards .options .sort .tabContents .tab > label:last-child {
  margin-bottom: 0;
}
#leaderboards .options .sort .tabContents .tab > input {
  display: none;
}
#leaderboards .options .search::-webkit-input-placeholder {
  color: rgba(255,255,255,0.35);
}
#leaderboards .toplist {
  width: 70%;
  float: right;
}
#leaderboards .toplist li {
  background: white;
  border-radius: 6px;
  margin-bottom: 14px;
  box-shadow: 0 4px #C2C2C2;
  position: relative;
  cursor: pointer;
}
#leaderboards .toplist li .thumb {
  padding: 20px 20px 19px;
  font-weight: bold;
  color: #8F2885;
  font-size: 0;
  line-height: 36px;
  position: relative;
}
#leaderboards .toplist li .thumb span {
  display: inline-block;
  vertical-align: middle;
  font-size: 15px;
}
#leaderboards .toplist li .thumb .img {
  width: 36px;
  height: 36px;
  display: inline-block;
  background: #eee no-repeat center;
  background-size: 100% 100%;
  border-radius: 6px;
  margin-right: 20px;
  font-size: 0;
}
#leaderboards .toplist li .thumb .stat {
  position: absolute;
  top: 26px;
  right: 90px;
  line-height: 16px;
  text-transform: uppercase;
  text-align: center;
  font-size: 10px;
}
#leaderboards .toplist li .thumb .stat b {
  display: block;
  font-size: 20px;
  margin: 0;
}
#leaderboards .toplist li:after {
  content: attr(data-rank);
  position: absolute;
  top: 0;
  right: 0;
  float: right;
  background: #EAEAEA;
  height: 75px;
  width: 75px;
  display: block;
  text-align: center;
  line-height: 75px;
  font-size: 16px;
  color: #666;
  font-weight: bold;
  border-top-right-radius: 6px;
  border-bottom-right-radius: 6px;
  box-shadow: 0 4px rgba(0,0,0,0.05);
}
#leaderboards .toplist li[data-rank="1"]:after,
#leaderboards .toplist li[data-rank="2"]:after,
#leaderboards .toplist li[data-rank="3"]:after {
  content: "\f091";
  font-family: FontAwesome;
  font-size: 24px;
  font-weight: 100;
  line-height: 77px;
}
#leaderboards .toplist li[data-rank="1"]:after {
  color: #e0aa03;
}
#leaderboards .toplist li[data-rank="2"]:after {
  color: #9A9A9A;
}
#leaderboards .toplist li[data-rank="3"]:after {
  color: #CC913C;
}
#leaderboards .pagination {
  background: #bbb;
  border-radius: 6px;
  margin-top: 14px;
  padding: 20px;
  box-shadow: 0 4px #aaa;
  color: #aaa;
  height: 72px;
  box-sizing: border-box;
  position: relative;
}
#leaderboards .pagination button {
  border-top-left-radius: 3px;
  border-bottom-left-raidus: 3px;
  background: transparent;
  border: none;
  outline: none;
  text-transform: uppercase;
  font-family: "Roboto", sans-serif;
  font-weight: bold;
  line-height: 30px;
  color: #666;
  font-size: 20px;
  position: absolute;
  top: 0;
  left: 0;
  width: 72px;
  height: 72px;
  text-align: center;
  cursor: pointer;
  transition: .25s;
}
#leaderboards .pagination .next {
  border-radius: 0;
  border-top-right-radius: 3px;
  border-bottom-right-raidus: 3px;
  left: auto;
  right: 0;
}
#leaderboards .pagination button:hover {
  background: rgba(0,0,0,0.05);
  box-shadow: 0 4px rgba(0,0,0,0.05);
}
#leaderboards .pagination button:before {
  font-family: FontAwesome;
}
#leaderboards .pagination .prev:before {
  content: "\f104";
}
#leaderboards .pagination .next:before {
  content: "\f105";
}
#leaderboards .pagination button[disabled] {
  color: #9f9f9f;
  cursor: not-allowed;
  background: transparent !important;
  box-shadow: none !important;
}
#leaderboards .pagination span {
  text-align: center;
  display: block;
  text-transform: uppercase;
  line-height: 36px;
  color: #444;
  cursor: default;
}
    </style>

    <script>
    
    $("#leaderboards .tabTitles span").click(function(){
  $("#leaderboards .active").removeClass("active");
  $("#leaderboards .tabContents ."+$(this).attr("id")).addClass("active");
  $(this).addClass("active");
});
    </script>
</head>
<body>
<div id="leaderboards">
 <h3><strong>LEADERBOARD FOR INFOX EVENT</strong></h3>
 <ul class="toplist">
   <li data-rank="1">
     <div class="thumb">
       <span data-name="BluewaveSwift">1111</span>
       <span class="name">BluewaveSwift</span>
       <span class="stat"><b>4304</b>Wins</span>
     </div>
     <div class="more">
       <!-- To be designed & implemented -->
     </div>
   </li>
   <li data-rank="2">
     <div class="thumb">
       <span class="img" data-name="BluewaveSwift"></span>
       <span class="name">BluewaveSwift</span>
       <span class="stat"><b>4304</b>Wins</span>
     </div>
     <div class="more">
       <!-- To be designed & implemented -->
     </div>
   </li>
   
   
   <li data-rank="2">
     <div class="thumb">
       <span class="img" data-name="BluewaveSwift"></span>
       <span class="name">BluewaveSwift</span>
       <span class="stat"><b>4304</b>Wins</span>
     </div>
     <div class="more">
       <!-- To be designed & implemented -->
     </div>
   </li>
   
   <li data-rank="2">
     <div class="thumb">
       <span class="img" data-name="BluewaveSwift"></span>
       <span class="name">BluewaveSwift</span>
       <span class="stat"><b>4304</b>Wins</span>
     </div>
     <div class="more">
       <!-- To be designed & implemented -->
     </div>
   </li>
   <li data-rank="3">
     <div class="thumb">
       <span class="img" data-name="BluewaveSwift"></span>
       <span class="name">BluewaveSwift</span>
       <span class="stat"><b>4304</b>Wins</span>
     </div>
     <div class="more">
       <!-- To be designed & implemented -->
     </div>
   </li>
   <li data-rank="4">
     <div class="thumb">
       <span class="img" data-name="BluewaveSwift"></span>
       <span class="name">BluewaveSwift</span>
       <span class="stat"><b>4304</b>Wins</span>
     </div>
     <div class="more">
       <!-- To be designed & implemented -->
     </div>
   </li>
 </ul>
</div>
</body>
</html>