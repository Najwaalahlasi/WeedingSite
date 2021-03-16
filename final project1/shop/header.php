<html>
	<head>
		<script src="js/jquery-3.2.1.min.js" ></script>
	<script src="js/materialize.min.js" ></script>
<script src="js/material.js" ></script>
<link rel="stylesheet" href="css/materialize.min.CSS"/>
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<style>
@font-face {
    font-family: awesome;
    src: url(font.ttf) ;
}
 .fptree{ 
    font-family:Times;
	size:5em;
}
 
</style>

	</head>
	<body>



    <div class="card-panel teal" id="header">
	  <a class="waves-effect waves-light btn modal-trigger" href="#modal1" id="about">Steps of Algorithm</a>
      <h4 id=headname ><a href="index.php" id="fptree">..FP-Tree..</a></h4>



  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>FP-Tree Algorithm</h4>
   	<div class="desc">
		<font size=4em><p> 
		<ul><b><li>1. Construction of the FP-Tree</li> </b>
<li>
    <ul><li>Pass 1:
    The data set is scanned to determine the support of each item. The infrequent items are discarded and not used in the FP-Tree. All frequent items are ordered based on their support.
   </li><li> Pass 2:The algorithm does the second pass over the data to construct the FP-tree.
	</li></ul>
</li> 
<li><b>2. Extract frequent item sets</b></li> 
<li> - The first step is to collect the initial prefix path  </li> 
<li> - the support count is calculated by adding all support counts with node  </li> 
<li> - To solve the subproblems the prefix path has to be converted into a conditional FP-Tree. This tree is used to find frequent item sets ending with a specific suffix.  </li> 
<li> - The algorithm starts with the next subproblem.  </li> 
</ul>

	</p></font>
	</div>
    </div>
    <div class="modal-footer">
      <a href="#" class="modal-action modal-close waves-effect waves-green btn-flat">OK</a>
    </div>
  </div>
    </div>

	