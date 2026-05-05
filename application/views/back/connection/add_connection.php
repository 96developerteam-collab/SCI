<div id="content-container">

    <div id="page-head">
        <!--Page Title-->
        <div id="page-title">
            <h1 class="page-header text-overflow" style="display:table-cell"><?php echo translate('connection')?></h1>
                    <div class="col-md-6" style="margin-left:280px;margin-top: -10px;">
                        <div id="tabs-container">
                            <ul class="tabs">
                                <li class="tab  dropdown" onclick="openTab('tab1')"><img src="<?= base_url()?>nav-icon-message.svg" alt="">
                                    <div class="dropdown-content">
                                        <a href="<?= base_url()?>admin/inbox" class="dropdown-item"><?= translate('inbox')?></a>
                                        <a href="<?= base_url()?>admin/sendMessage" class="dropdown-item"><?= translate('sent')?></a>
                                        <a href="<?= base_url()?>admin/composeMessage" class="dropdown-item"><?= translate('compose')?></a>
                                    </div>
                                </li>
                                <li class="tab tab2">
                                    <a href="<?= base_url()?>admin/add_connection"><img src="<?= base_url()?>nav-icon-search.svg" alt=""></a>
                                </li>
                                <li class="tab tab2" onclick="printPage()"><img src="<?= base_url()?>nav-icon-print.svg" alt=""></li>
                                <li class="tab tab2"><img src="<?= base_url()?>nav-icon-help.svg" alt=""></li>
                            </ul>
                        </div>
                    </div>
        </div>
        <!--End page title-->

        <!--Breadcrumb-->
        <ol class="breadcrumb">
            <li><a href="<?=base_url()?>admin"><?php echo translate('home')?></a></li>
            <li class="active"><a href="#"><?php echo translate('connection')?></a></li>
            <li class="active"><a href="#"><?php echo translate('add_connection')?></a></li>
        </ol>
        <!--End breadcrumb-->
    </div>

    <!--Page content-->
    <div id="page-content">

        <div class="panel">

            

            <div class="row">
                <div class="col-md-6">
                    <h3 class="panel-title"><?php echo translate('add_connection')?></h3>
                </div>
                <div class="col-md-6" align="right" style="margin: 9px 0px 0px -20px;">
                   <button class="back-button" onclick="goBack()"><?= translate('back')?></button>
                </div>
            </div>

            <div class="panel-body">
                <div class="col-md-12 top-header">
                    <div class="header-search"><h6>Search Directory for</h6></div>
                    <div class="header-word"><a href="#" onclick="openTab('tab1')"><h6><?= translate('basic_search')?></h6></a><a href="#" onclick="openTab('tab2')"><h6><?= translate('advance_serch')?></h6></a></div>
                </div>
                
                <div class="col-md-12" style="border:1px grey solid;">
                    <div class="tab-container">
                       

                        <div id="tab1" class="tab-content">
                            <!-- <form action="" method="post"> -->
                                <div class="form-group">
                                    <label for="an_search"><?= translate('search_term')?><span class="red">*</span></label>
                                    <input type="text" class="form-control" id="an_search" name="an_search" required>
                                </div>
                                <button type="submit" class="submitbutton-1"><?= translate('search_member')?></button>
                            <!-- </form> -->
                        </div>

                        <div id="tab2" class="tab-content">
                            <!-- <form action="" method="post"> -->
                                <div class="form-group">
                                    <label for="an_keyword"><?= translate('keyword')?><span class="red">*</span></label>
                                    <input type="text" class="form-control" id="an_keyword" name="an_keyword" required>
                                </div>
                                <div class="form-group">
                                    <label for="an_fname"><?= translate('first_name')?><span class="red">*</span></label>
                                    <input type="text" class="form-control" id="an_fname" name="an_fname" required>
                                </div>
                                <div class="form-group">
                                    <label for="an_lname"><?= translate('last_name')?><span class="red">*</span></label>
                                    <input type="text" class="form-control" id="an_lname" name="an_lname" required>
                                </div>
                                <div class="form-group">
                                    <label for="an_company"><?= translate('company_name')?><span class="red">*</span></label>
                                    <input type="text" class="form-control" id="an_company" name="an_company" required>
                                </div>
                                <div class="form-group">
                                    <label for="an_country"><?= translate('country')?><span class="red">*</span></label>
                                    <select class="form-control" id="an_country" name="an_country" required>
                                        <option value="">country</option>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label for="an_city"><?= translate('city')?><span class="red">*</span></label>
                                    <input type="text" class="form-control" id="an_city" name="an_city" required>
                                </div>
                                <div class="form-group">
                                    <label for="an_state"><?= translate('state')?><span class="red">*</span></label>
                                    <input type="text" class="form-control" id="an_state" name="an_state" required>
                                </div>
                                <button type="submit" class="submitbutton-1"><?= translate('search_member')?></button>
                            <!-- </form> -->
                        </div>

                        
                    </div>
                </div>

                

            </div>
        </div>
    </div>
</div>



<script>
setTimeout(function() {
    $('#success_alert').fadeOut('fast');
    $('#danger_alert').fadeOut('fast');
}, 5000); // <-- time in milliseconds

function delete_blog(id) {
    $("#delete_blog").val(id);
}

$("#delete_blog").click(function() {
    $.ajax({
        url: "<?=base_url()?>admin/blog/delete/" + $("#delete_blog").val(),
        success: function(response) {
            window.location.href = "<?=base_url()?>admin/blog";
        },
        fail: function(error) {
            alert(error);
        }
    });
})
function openTab(tabName) {
    var i, tabContent;
    tabContent = document.getElementsByClassName("tab-content");
    for (i = 0; i < tabContent.length; i++) {
      tabContent[i].style.display = "none";
    }
    document.getElementById(tabName).style.display = "block";
  }

  // Add the following line to display Tab 1 by default
  openTab('tab1');

</script>
<script>
  function goBack() {
    window.history.back();
  }
</script>
<script>
    function printPage() {
        window.print();
    }
</script>
<style>
    :root{
        --blackColor:#000;
        --purpleColor:#4D2D6B;
        --whiteColor:#fff;
    }
     .tabs {
            display: flex;
            list-style: none;
            padding: 0;
            margin: 0;
            border-radius:10px;
            
        }

        .tab {
            position: relative;
            flex: 1;
            text-align: center;
            padding: 0px;
            background-color: var(--purpleColor);
            cursor: pointer;
        }

        .tab:hover {
            background-color: var(--blackColor);
        }
        .tab2:hover{
            background-color: var(--purpleColor);
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: var(--purpleColor);
            min-width: 160px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
            top: 100%;
            left: 0;
            width: 100%;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown-item {
            padding: 12px 16px;
            display: block;
            text-align: left;
            text-decoration: none;
            color: var(--whiteColor);
        }

        .dropdown-item:hover {
            background-color: var(--blackColor);
            color:var(--whiteColor);
        }
</style>
<style>
.back-button{
    padding:5px 15px;
    border-color:var(--purpleColor);
    background-color: #fff;
    color:var(--purpleColor);
    border-radius:5px;
    border:1px solid var(--purpleColor); 
}
.back-button:hover{
    color: #fff;
    background-color:var(--purpleColor);
    border:none;
}
.top-header{
    display:flex;
    justify-content:space-between;
    background-color: #B2BEB5;
    color:#242124;
    border-top-right-radius:10px;
    border-top-left-radius:10px;
}
.header-word{
    display:flex;
}
.header-word h6{
   margin-left: 10px;
}
.tab-container {
  display: flex;
  flex-direction: column;
  /* max-width: 600px; */
  margin: 7px ;
}

.tab-button {
  background-color: #3498db;
  color: var(--whiteColor);
  padding: 30px;
  cursor: pointer;
  border: none;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
}

.tab-button:hover {
  background-color: #555;
}

.tab-content {
  display: none;
  padding: 20px;
  /* border: 1px solid #ccc; */
  height: 550px;
  width: 1000px;
}

.tab-content h2 {
  color: #333;
}

.tab-content p {
  color: #666;
}
.submitbutton-1{
    padding:0.5rem 3rem;
    border-radius:8px;
    background-color: var(--purpleColor);
    color: var(--whiteColor);
    border:none;
}
.red{
    color:red;
}
</style>