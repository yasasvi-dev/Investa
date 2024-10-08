<!DOCTYPE html>
<html lang="en"><head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<title>Service Center Management</title>
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css?h=1f9e0951b46f853631f4c7a43326e9db">
<link rel="stylesheet" href="assets/fonts/font-awesome.min.css?h=a24cb0112e51902b6b3ed4606a7cd727">
<link rel="stylesheet" href="assets/css/styles.min.css?h=4ad9afcee13d2126334a3c065643d93c">
<link rel="stylesheet" href="DataTables/datatables.min.css">
<link rel="stylesheet" href="DataTables/DataTables-1.13.4/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="DataTables/Buttons-2.3.6/css/buttons.dataTables.min.css" />
</head>

<body style="background: rgba(237,231,231,0.65);color: var(--bs-dark);">
<?php
include ("dbase.php");
include ("sqlobj.php");
$sqlset =new sqlobj($bdd);
$log=$_COOKIE["login"] ; $ux=explode(":",$log);
$cid=$ux[0];
$user=$ux[1];
$sql="select * from users where uname='$user'"; 
$row5=$sqlset->firstrow($sql);
$ufname=$row5[6];

$sql="select * from dbpages where utype='$row5[3]'"; 
$row6=$sqlset->firstrow($sql);

$sql="select * from company  where cid=$cid"; 
$row8=$sqlset->firstrow($sql);

$sql="select * from menupage  where mid in($row6[2]) and mshow=1";  
$row7=$sqlset->allrows($sql);
 
	?>
<div id="wrapper" class="text-uppercase fs-6 fw-bolder text-white bg-dark border rounded-0 border-info shadow-lg">
 <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand"><a href="#"></a>&nbsp;&nbsp;&nbsp;<img class="navibar-img" src="assets/img/sballogo.jpg?h=2473d9f1b15d689ef37383ce92c409ca" /></li>
            <li> <span class="badge bg-warning text-dark"> Welcome to </span> <h4>Service Management </h4></li>
            <li>
                <hr />
            </li>
            <li><a href="<?php echo $row6[1] ?>">Dashboard </a></li>
			<?php foreach ($row7 as $mid){ ?>
            <li><a href="<?php echo $mid[2] ?>"><?php echo $mid[1] ?>   </a></li>
			<?php } ?>
            
            <li>
                <div class="dropdown"><a class=" dropdown-toggle" data-bs-toggle="dropdown" type="button"><?php echo $ufname ?> </a>
                    <div class="dropdown-menu"><a class="dropdown-item" href="index.html">Logout</a><a class="dropdown-item" href="profile.php">Profile</a><a class="dropdown-item" href="seting.php">Settings</a></div>
                </div>
            </li>
        </ul>
    </div>
    <div class="page-content-wrapper">
        <div class="container-fluid">
            <div><a id="menu-toggle" class="btn btn-link" role="button" href="#menu-toggle"><i class="fa fa-bars"></i></a><?php echo $row8[1] ?> ,<?php echo $row8[2] ?> </div>
        </div>
    </div>
</div><div class="container"><div class="row"><div class="col-md-12">   </div></div>
<div class="row">
<div class="col-md-6"> 
<?php 
$icode=$sqlset->maxacno("item",array($cid),"icode");
 

 ?>

<h3> Parts  </h3> <form action="#" method="post"  id="myform" ><div class='row'> <div class='col-md-12'><div class='form-floating mb-3'><input type='Hidden' id='cid' class='form-control' value ='<?php echo $cid ?>' placeholder=' '  ><label for='floatingInput'></label></div></div></div><div class='row'> <div class='col-md-12'><div class='form-floating mb-3'><input type='Hidden' id='icode' class='form-control' value ='<?php echo $icode ?>' placeholder=' '  ><label for='floatingInput'></label></div></div></div><div class='row'> <div class='col-md-12'><div class='form-floating mb-3'><input type='text' id='iname' class='form-control' value ='' placeholder='Item Name ' required><label for='floatingInput'>Part Name *</label></div></div></div><div class='row'> <div class='col-md-12'><div class='form-floating mb-3'><input type='text' id='ides' class='form-control' value ='' placeholder='Description ' required ><label for='floatingInput'>Part No *</label></div></div></div>
<div class='row'> <div class='col-md-12'><div class='form-floating mb-3'><input type='Number' id='cost' class='form-control'  value ='0' placeholder='Cost '  ><label for='floatingInput'>Cost</label></div></div></div>
<div class='row'> <div class='col-md-12'><div class='form-floating mb-3'><input type='Number' id='salep' class='form-control'  value ='0' placeholder='Selling Price '  ><label for='floatingInput'>Selling Price</label></div></div></div><div class='row'> <div class='col-md-12'><div class='form-floating mb-3'><input type='Number' id='minp' class='form-control'  value ='0' placeholder='Margin Price '  ><label for='floatingInput'>Margin Price</label></div></div></div><div class='row'> <div class='col-md-12'><div class='form-floating mb-3'><select id='stitem' value ='Yes' class='form-control' placeholder='Stock Item ' >  <option value='0'> No </option><option value='1' selected> Yes </option>< </select><label for='floatingInput'>Stock Item</label></div></div></div><div class='row'> <div class='col-md-12'><div class='form-floating mb-3'><label for='floatingInput'></label></div></div></div><div class='row'> <div class='col-md-12'><div class='form-floating mb-3'><label for='floatingInput'></label></div></div></div>
<div class='row'> 
	<div class='col-md-4'><button class='btn-lg bg-primary' onclick='newdata()' type='button'> <i class='fa fa-refresh text-white'></i> New   </button></div>
	<div class='col-md-4'>  <button class='btn-lg bg-success'  type='submit'> <i class='fa fa-save text-white'></i>  Save  </button></div>
	<div class='col-md-4'> <button class='btn-lg bg-warning' onclick='printdata()' type='button'> <i class='fa fa-print text-white'  ></i> Print</button></div>
</div>
	 <div class='row' id='formdata'> ....... </div></form>  


</div>
<div class="col-md-6">  
<br><br>
<?php 
$str1 ="select icode as ref , iname as  'Item Name' ,ides as 'Part No'  , cost , salep as sale  from item where cid=$cid order by icode desc";
$valindex=array(0);
$btns =array(["head"=>"Edit","cbak"=>"editdata"]);
//$sttbl =$sqlset->showdatatablebtn($str1,$valindex,$btns,"example");
$sttbl =$sqlset->showtablebtn($str1,$valindex,$btns);
echo $sttbl;
 ?>
 <table id="example3" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011-04-25</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011-07-25</td>
                <td>$170,750</td>
            </tr>
            <tr>
                <td>Ashton Cox</td>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
                <td>66</td>
                <td>2009-01-12</td>
                <td>$86,000</td>
            </tr>
            <tr>
                <td>Cedric Kelly</td>
                <td>Senior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>2012-03-29</td>
                <td>$433,060</td>
            </tr>
            <tr>
                <td>Airi Satou</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>33</td>
                <td>2008-11-28</td>
                <td>$162,700</td>
            </tr>
            <tr>
                <td>Brielle Williamson</td>
                <td>Integration Specialist</td>
                <td>New York</td>
                <td>61</td>
                <td>2012-12-02</td>
                <td>$372,000</td>
            </tr>
            <tr>
                <td>Herrod Chandler</td>
                <td>Sales Assistant</td>
                <td>San Francisco</td>
                <td>59</td>
                <td>2012-08-06</td>
                <td>$137,500</td>
            </tr>
            <tr>
                <td>Rhona Davidson</td>
                <td>Integration Specialist</td>
                <td>Tokyo</td>
                <td>55</td>
                <td>2010-10-14</td>
                <td>$327,900</td>
            </tr>
            <tr>
                <td>Colleen Hurst</td>
                <td>Javascript Developer</td>
                <td>San Francisco</td>
                <td>39</td>
                <td>2009-09-15</td>
                <td>$205,500</td>
            </tr>
            <tr>
                <td>Sonya Frost</td>
                <td>Software Engineer</td>
                <td>Edinburgh</td>
                <td>23</td>
                <td>2008-12-13</td>
                <td>$103,600</td>
            </tr>
            <tr>
                <td>Jena Gaines</td>
                <td>Office Manager</td>
                <td>London</td>
                <td>30</td>
                <td>2008-12-19</td>
                <td>$90,560</td>
            </tr>
            <tr>
                <td>Quinn Flynn</td>
                <td>Support Lead</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>2013-03-03</td>
                <td>$342,000</td>
            </tr>
            <tr>
                <td>Charde Marshall</td>
                <td>Regional Director</td>
                <td>San Francisco</td>
                <td>36</td>
                <td>2008-10-16</td>
                <td>$470,600</td>
            </tr>
            <tr>
                <td>Haley Kennedy</td>
                <td>Senior Marketing Designer</td>
                <td>London</td>
                <td>43</td>
                <td>2012-12-18</td>
                <td>$313,500</td>
            </tr>
            <tr>
                <td>Tatyana Fitzpatrick</td>
                <td>Regional Director</td>
                <td>London</td>
                <td>19</td>
                <td>2010-03-17</td>
                <td>$385,750</td>
            </tr>
            <tr>
                <td>Michael Silva</td>
                <td>Marketing Designer</td>
                <td>London</td>
                <td>66</td>
                <td>2012-11-27</td>
                <td>$198,500</td>
            </tr>
            <tr>
                <td>Paul Byrd</td>
                <td>Chief Financial Officer (CFO)</td>
                <td>New York</td>
                <td>64</td>
                <td>2010-06-09</td>
                <td>$725,000</td>
            </tr>
            <tr>
                <td>Gloria Little</td>
                <td>Systems Administrator</td>
                <td>New York</td>
                <td>59</td>
                <td>2009-04-10</td>
                <td>$237,500</td>
            </tr>
            <tr>
                <td>Bradley Greer</td>
                <td>Software Engineer</td>
                <td>London</td>
                <td>41</td>
                <td>2012-10-13</td>
                <td>$132,000</td>
            </tr>
            <tr>
                <td>Dai Rios</td>
                <td>Personnel Lead</td>
                <td>Edinburgh</td>
                <td>35</td>
                <td>2012-09-26</td>
                <td>$217,500</td>
            </tr>
            <tr>
                <td>Jenette Caldwell</td>
                <td>Development Lead</td>
                <td>New York</td>
                <td>30</td>
                <td>2011-09-03</td>
                <td>$345,000</td>
            </tr>
            <tr>
                <td>Yuri Berry</td>
                <td>Chief Marketing Officer (CMO)</td>
                <td>New York</td>
                <td>40</td>
                <td>2009-06-25</td>
                <td>$675,000</td>
            </tr>
            <tr>
                <td>Caesar Vance</td>
                <td>Pre-Sales Support</td>
                <td>New York</td>
                <td>21</td>
                <td>2011-12-12</td>
                <td>$106,450</td>
            </tr>
            <tr>
                <td>Doris Wilder</td>
                <td>Sales Assistant</td>
                <td>Sydney</td>
                <td>23</td>
                <td>2010-09-20</td>
                <td>$85,600</td>
            </tr>
            <tr>
                <td>Angelica Ramos</td>
                <td>Chief Executive Officer (CEO)</td>
                <td>London</td>
                <td>47</td>
                <td>2009-10-09</td>
                <td>$1,200,000</td>
            </tr>
            <tr>
                <td>Gavin Joyce</td>
                <td>Developer</td>
                <td>Edinburgh</td>
                <td>42</td>
                <td>2010-12-22</td>
                <td>$92,575</td>
            </tr>
            <tr>
                <td>Jennifer Chang</td>
                <td>Regional Director</td>
                <td>Singapore</td>
                <td>28</td>
                <td>2010-11-14</td>
                <td>$357,650</td>
            </tr>
            <tr>
                <td>Brenden Wagner</td>
                <td>Software Engineer</td>
                <td>San Francisco</td>
                <td>28</td>
                <td>2011-06-07</td>
                <td>$206,850</td>
            </tr>
            <tr>
                <td>Fiona Green</td>
                <td>Chief Operating Officer (COO)</td>
                <td>San Francisco</td>
                <td>48</td>
                <td>2010-03-11</td>
                <td>$850,000</td>
            </tr>
            <tr>
                <td>Shou Itou</td>
                <td>Regional Marketing</td>
                <td>Tokyo</td>
                <td>20</td>
                <td>2011-08-14</td>
                <td>$163,000</td>
            </tr>
            <tr>
                <td>Michelle House</td>
                <td>Integration Specialist</td>
                <td>Sydney</td>
                <td>37</td>
                <td>2011-06-02</td>
                <td>$95,400</td>
            </tr>
            <tr>
                <td>Suki Burks</td>
                <td>Developer</td>
                <td>London</td>
                <td>53</td>
                <td>2009-10-22</td>
                <td>$114,500</td>
            </tr>
            <tr>
                <td>Prescott Bartlett</td>
                <td>Technical Author</td>
                <td>London</td>
                <td>27</td>
                <td>2011-05-07</td>
                <td>$145,000</td>
            </tr>
            <tr>
                <td>Gavin Cortez</td>
                <td>Team Leader</td>
                <td>San Francisco</td>
                <td>22</td>
                <td>2008-10-26</td>
                <td>$235,500</td>
            </tr>
            <tr>
                <td>Martena Mccray</td>
                <td>Post-Sales support</td>
                <td>Edinburgh</td>
                <td>46</td>
                <td>2011-03-09</td>
                <td>$324,050</td>
            </tr>
            <tr>
                <td>Unity Butler</td>
                <td>Marketing Designer</td>
                <td>San Francisco</td>
                <td>47</td>
                <td>2009-12-09</td>
                <td>$85,675</td>
            </tr>
            <tr>
                <td>Howard Hatfield</td>
                <td>Office Manager</td>
                <td>San Francisco</td>
                <td>51</td>
                <td>2008-12-16</td>
                <td>$164,500</td>
            </tr>
            <tr>
                <td>Hope Fuentes</td>
                <td>Secretary</td>
                <td>San Francisco</td>
                <td>41</td>
                <td>2010-02-12</td>
                <td>$109,850</td>
            </tr>
            <tr>
                <td>Vivian Harrell</td>
                <td>Financial Controller</td>
                <td>San Francisco</td>
                <td>62</td>
                <td>2009-02-14</td>
                <td>$452,500</td>
            </tr>
            <tr>
                <td>Timothy Mooney</td>
                <td>Office Manager</td>
                <td>London</td>
                <td>37</td>
                <td>2008-12-11</td>
                <td>$136,200</td>
            </tr>
            <tr>
                <td>Jackson Bradshaw</td>
                <td>Director</td>
                <td>New York</td>
                <td>65</td>
                <td>2008-09-26</td>
                <td>$645,750</td>
            </tr>
            <tr>
                <td>Olivia Liang</td>
                <td>Support Engineer</td>
                <td>Singapore</td>
                <td>64</td>
                <td>2011-02-03</td>
                <td>$234,500</td>
            </tr>
            <tr>
                <td>Bruno Nash</td>
                <td>Software Engineer</td>
                <td>London</td>
                <td>38</td>
                <td>2011-05-03</td>
                <td>$163,500</td>
            </tr>
            <tr>
                <td>Sakura Yamamoto</td>
                <td>Support Engineer</td>
                <td>Tokyo</td>
                <td>37</td>
                <td>2009-08-19</td>
                <td>$139,575</td>
            </tr>
            <tr>
                <td>Thor Walton</td>
                <td>Developer</td>
                <td>New York</td>
                <td>61</td>
                <td>2013-08-11</td>
                <td>$98,540</td>
            </tr>
            <tr>
                <td>Finn Camacho</td>
                <td>Support Engineer</td>
                <td>San Francisco</td>
                <td>47</td>
                <td>2009-07-07</td>
                <td>$87,500</td>
            </tr>
            <tr>
                <td>Serge Baldwin</td>
                <td>Data Coordinator</td>
                <td>Singapore</td>
                <td>64</td>
                <td>2012-04-09</td>
                <td>$138,575</td>
            </tr>
            <tr>
                <td>Zenaida Frank</td>
                <td>Software Engineer</td>
                <td>New York</td>
                <td>63</td>
                <td>2010-01-04</td>
                <td>$125,250</td>
            </tr>
            <tr>
                <td>Zorita Serrano</td>
                <td>Software Engineer</td>
                <td>San Francisco</td>
                <td>56</td>
                <td>2012-06-01</td>
                <td>$115,000</td>
            </tr>
            <tr>
                <td>Jennifer Acosta</td>
                <td>Junior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>43</td>
                <td>2013-02-01</td>
                <td>$75,650</td>
            </tr>
            <tr>
                <td>Cara Stevens</td>
                <td>Sales Assistant</td>
                <td>New York</td>
                <td>46</td>
                <td>2011-12-06</td>
                <td>$145,600</td>
            </tr>
            <tr>
                <td>Hermione Butler</td>
                <td>Regional Director</td>
                <td>London</td>
                <td>47</td>
                <td>2011-03-21</td>
                <td>$356,250</td>
            </tr>
            <tr>
                <td>Lael Greer</td>
                <td>Systems Administrator</td>
                <td>London</td>
                <td>21</td>
                <td>2009-02-27</td>
                <td>$103,500</td>
            </tr>
            <tr>
                <td>Jonas Alexander</td>
                <td>Developer</td>
                <td>San Francisco</td>
                <td>30</td>
                <td>2010-07-14</td>
                <td>$86,500</td>
            </tr>
            <tr>
                <td>Shad Decker</td>
                <td>Regional Director</td>
                <td>Edinburgh</td>
                <td>51</td>
                <td>2008-11-13</td>
                <td>$183,000</td>
            </tr>
            <tr>
                <td>Michael Bruce</td>
                <td>Javascript Developer</td>
                <td>Singapore</td>
                <td>29</td>
                <td>2011-06-27</td>
                <td>$183,000</td>
            </tr>
            <tr>
                <td>Donna Snider</td>
                <td>Customer Support</td>
                <td>New York</td>
                <td>27</td>
                <td>2011-01-25</td>
                <td>$112,000</td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot>
    </table>
 
 
 
 
 
 
 
 
 
</div>
</div>
</div>

<footer class="text-white bg-dark">
    <div class="container py-4 py-lg-5">System Develop and Maintaining by mysoftlk.com
        <hr />
        <div class="d-flex justify-content-between align-items-center pt-3">
            <p class="mb-0">Copyright © 2023 </p>
            <ul class="list-inline mb-0">
                <li class="list-inline-item"><svg class="bi bi-facebook" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                    </svg></li>
                <li class="list-inline-item"><svg class="bi bi-twitter" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                    </svg></li>
                <li class="list-inline-item"><svg class="bi bi-instagram" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path>
                    </svg></li>
            </ul>
        </div>
    </div>
</footer>
<script src="assets/js/jquery.min.js?h=84e399b8f2181ccd73394fdeddff1638"></script>
<script src="assets/bootstrap/js/bootstrap.min.js?h=5488c86a1260428f0c13c0f8fb06bf6a"></script>
<script src="assets/js/script.min.js?h=43583f9c06d57d8535a11a9e2f5a6a7c"></script>
<script src="DataTables/DataTables-1.13.4/js/jquery.dataTables.min.js"></script>
<script src="DataTables/DataTables-1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script src="myfun.js"></script>
<script type="text/javascript">

$(document).ready(function(e) {
 
 $('#myform').on('submit',function (e) {

          var vals=currval();	
 shajax('itemsave.php',{vals:vals   } ,'formdata');

          e.preventDefault();
        });
		
$('#example').DataTable({
  buttons: [
        'copy', 'excel', 'pdf'
    ] 
 
 });			
//setTimeout(datatable, 5000);
});


function showtables( tname){	 
shajax('showtable.php',{vals:tname  } ,'log2');
datatable();
}
function savedata( ){
var vals=currval();	
 shajax('itemsave.php',{vals:vals   } ,'formdata');
  
//return false;
}
function datatable(){
$('#example').DataTable({
	 dom: 'Bfrtip',
  buttons: [
        'copy', 'excel', 'pdf'
    ]
 
 });	
}
function newdata(){
	window.location.reload();
}
function editdata(vals ){
shajax('itemedit.php',{vals:vals ,tbl:"item"   } ,'formdata');	
}

</script>



</body>
</html>