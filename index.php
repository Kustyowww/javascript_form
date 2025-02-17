<html> 
	 <head> 
		<title>Javascript Form</title>	
	</head>
	<body style="background-color: blue; color:#FFF;">
		 <h1> Student Record </h1>
		
		<table id ="student_table">
		</table>
		
		<script>
			<!-- GET TABLE ELEMENT-->
			const studentTable = document
				.getElementById("student_table");
				
			<!-- GET ROW-->
			const row1 = studentTable.insertRow();
			
			<!-- CREATE 2 COLUMNS (CELL) -->
			const row1col1 = row1.insertCell();
			const row1col2 = row1.insertCell();
			
			row1col1.innerHTML = "LAST NAME";
			row1col2.innerHTML = "FIRST NAME";
			
			const row2 = studentTable.insertRow();
			const row1col1 =row2.insertCell();
			const row1col2 =row2.insertCell();
			
			const inputLastName = document.createElement("input);
			inputFirstName.type="text";
			inputFirstName.placeholder="Insert First Name"
			
			row2col2.append(inputFirstname);
			
			const row3 = studentTable.insertRow();
			const row3col1= row3.insertCell();
			row3col1.colspan="2";
			row3col1.innerHTML="TANGINAMO ASIONG";
			
				
		  </script>
	 </body>
</html>