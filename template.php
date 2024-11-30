<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Pedido - SAP Style</title>
    <style>
        /* General body styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #fff; /* Light background */
            margin: 0;
            padding: 0;
            display: flex;
            min-height: 100vh;
        }

        h1 {
            font-size: 1.5rem;
            color: #32363a; /* Neutral dark color for the title */
            margin-bottom: 20px;
            font-weight: 500;
        }

        /* Sidebar styling */
        .sidebar {
            width: 200px;
            background-color: #F5F5F7;/* SAP Blue */
            color: #4A4947;
            padding: 20px;
            box-sizing: border-box;
            position: fixed;
            height: 100%;
        }

        .sidebar h2 {
            font-size: 1.2rem;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        .sidebar ul li {
            margin: 15px 0;
        }

        .sidebar ul li a {
            color: #4A4947;
            text-decoration: none;
            font-size: 1rem;
            display: block;
            padding: 10px;
            border-radius: 4px;
        }

        .sidebar ul li a:hover {
            background-color: #0854a0; /* Darker blue */
        }

        /* Page content container */
        .content {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-left: 250px; /* Offset for the sidebar */
            width: calc(100% - 250px);
            min-height: 100vh;
        }

        /* Container for the form */
        form {
            background-color: #fff;
            padding: 20px 30px;
            /*border-radius: 8px; /* Rounded corners */
            /*box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1); /* Subtle shadow */
            width: 700px; /* Fixed width for consistency */
        }

        /* Fieldset Styling */
        fieldset {
            border: 1px solid #ddd;
            border-radius: 4px;
            margin-bottom: 20px;  
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);  
            background-color: #fff;
            border: none;
            
        }

        /* Legend styling for section titles */
        legend {
            font-size: 1.1rem;
            font-weight: bold;
            color: #fff;
            margin-bottom: 10px;
            display: block;   
            background-color: #4A4947;
            padding: 5px 10px;
            border-radius: 4px;
        }

        /* Label styling */
        label {
            font-size: 0.9rem;
            color: #32363a;
            font-weight: 500;
            display: inline-block;
            margin-bottom: 5px;
           
        }

        /* Input field styling */
        input[type="text"],
        input[type="number"],
        input[type="date"],
        input[type="time"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #d9d9d9;
            border-radius: 4px;
            font-size: 1rem;   
            color: #0a6ed1;
            box-sizing: border-box;
            background-color: #F5F5F7;
        }

        input[type="text"]:focus,
        input[type="number"]:focus,
        input[type="date"]:focus,
        input[type="time"]:focus {
            border-color: #0a6ed1;
            outline: none;
            box-shadow: 0 0 2px 2px rgba(10, 110, 209, 0.2); /* Highlight focus */
        }

        /* Two-column layout for certain inputs */
        .row {
            display: flex;
            justify-content: space-between;
            gap: 15px; /* Spacing between the columns */
        }

        .row > div {
            flex: 1;
        }

        /* Button styling */
        button[type="submit"] {
            background-color: #0a6ed1; /* SAP Blue */
            color: white;
            border: none;
            padding: 12px;
            font-size: 1rem;
            font-weight: bold;
            border-radius: 4px;
            cursor: pointer;
            text-align: center;
            width: 100%;
        }

        button[type="submit"]:hover {
            background-color: #0854a0; /* Darker blue on hover */
        }
        
        table {
      width: 100%;
      border-collapse: collapse;
      /* box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); */
      background-color: #fff;  
      font-size: 0.8rem;
    }

    
     th, td {
      /* border: 1px solid #ddd; */
      padding: 10px;
      text-align: left;
      border-bottom: 1.5px solid #ddd;

    }

    table th {
      /* background-color: #f2f2f2; */
      background-color: #fff;
      color: #333;
    }

    table tr:hover {
      background-color: #f5f5f5;
    }

    table td.actions {
      text-align: center;
    }

    table i {
      cursor: pointer;
      color: #3498db;
    }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>GREEN2B</h2>
        <ul>
            <li><a href="#section1">Receiving</a></li>
            <li><a href="#section2">Step 1</a></li>
            <li><a href="#section3">Step 2</a></li>
            <li><a href="#section4">Step 3</a></li>
        </ul>
    </div>

   
</body>
</html>
