<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>modal</title>
    <style>
    
    /* Helpers 
====================== */
.u-imgResponsive {
  max-width: 100%;
}

.u-btn {
  flex: 0 0 100%;
  padding: 14px 20px;
  border: 0;
  background: linear-gradient(to top, rgba(255, 255, 255, 0) 0%, rgba(250, 198, 100, 0.27) 100%), #2976df;
  border-radius: 25px;
  color: #fff;
  font-size: 18px;
  letter-spacing: 1px;
  transition: all .2s ease;
  box-shadow: 0 15px 40px 0 rgba(41, 118, 223, 0.5);
}
.u-btn:hover {
  opacity: 0.9;
}
.u-btn.u-btn--success {
  background: #00d000;
  box-shadow: 0 15px 40px 0 rgba(0, 208, 0, 0.5);
}

/* Global 
====================== */
html {
  box-sizing: border-box;
  height: 100%;
}
html *,
html *:before
*:after {
  box-sizing: inherit;
}

body {
  font-family: "Proxima Nova Soft Semibold", "Proxima Nova", 'Helvetica Neue', Helvetica, Arial;
}

body,
.wrapper {
  min-height: 100vh;
}

/* Modal 
====================== */
.wrapper {
  display: flex;
  align-items: center;
  justify-content: center;
  background: url(https://dl.dropboxusercontent.com/s/v3m6p0p5kq6xzkz/100daysui_100bg.png) no-repeat, #303540;
  background-size: cover;
}

.modal {
  width: 100%;
  max-width: 530px;
  margin: 20px;
  overflow: hidden;
  box-shadow: 0 60px 80px 0 rgba(0, 0, 0, 0.4);
}

.modal-top {
  padding: 30px 30px 20px;
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
  background: #fbfbfb;
}

.modal-icon {
  display: block;
  max-width: 207px;
  margin: 0 auto 65px;
}

.modal-header {
  margin-bottom: 10px;
  font-size: 25.5px;
  letter-spacing: 2px;
  text-align: center;
}

.modal-subheader {
  max-width: 350px;
  margin: 0 auto;
  font-size: 19px;
  line-height: 1.3;
  letter-spacing: 1.25px;
  text-align: center;
  color: #999;
}

.modal-bottom {
  display: flex;
  flex-wrap: wrap;
  padding: 15px 55px;
  border-bottom-left-radius: 10px;
  border-bottom-right-radius: 10px;
  background: #fff;
}

.modal-btn {
  margin: 10px auto;
}

/* Media Queries */
@media (min-width: 456px) {
  .modal-top {
    padding: 69px 0 65px;
  }

  .modal-bottom {
    padding: 30px 60px;
  }

  .modal-btn {
    flex: 1;
    margin: 0;
    max-width: 190px;
  }
  .modal-btn:nth-of-type(2) {
    margin-left: 30px;
  }
}

    </style>
<script>

$("#check").show();
</script>
</head>
<body>

<button id="check">asdfghjkl</button>
<div  class="wrapper">
    <div class="modal modal--congratulations">
        <div class="modal-top">
            <img class="modal-icon u-imgResponsive" src="https://dl.dropboxusercontent.com/s/e1t2hhowjcrs7f5/100daysui_100icon.png" alt="Trophy" />
            <div class="modal-header">Congratulations</div>
            <div class="modal-subheader">You have successfully completed the 100 Days UI Challenge</div>
        </div>
        <div class="modal-bottom">
            <button class="modal-btn u-btn u-btn--share">Share</button>
            <button class="modal-btn u-btn u-btn--success">Have a beer</button>
        </div>
    </div>
</div>
</body>
</html>