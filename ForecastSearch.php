<html>
<head>
<title>
Forecast Search
</title>
    <script type="text/javascript">
        function validateForm()
        {
            alert("Hello");
            var i=document.getElementById("names");
            var selected=i.options[i.selectedIndex].value;
            var selectedn=i.options[i.selectedIndex].text;
            var sa=document.forms["forecast"]["stadd"].value;
            alert(sa);
            var city=document.forms["forecast"]["city"].value;
            
                if(sa==null||sa=="")
                    alert("Please enter the value for street address");
                
                if(city==null||city=="")
                    alert("Please enter the value for city");
                
            if(selected=="default")
                    alert("Please select a valid state");
            
            //var state=document.forms["forecast"]["state"].value;
            var temp=document.forms["forecast"]["temp"].value;
            alert("temp");
        }
        
        function resetForm()
        {
            alert("reset");
            document.forms["forecast"]["stadd"].value="";
            document.forms["forecast"]["city"].value="";
            //document.getElementById("names").options[document.getElementById("names").selectedIndex].selected=0;
            document.forms["forecast"]["statenames"].selectedIndex = 0;
            var op=document.forms["forecast"]["temp"];
            for(i=0;i<op.length;i++)
            {
                if(op.elements[i].checked=true)
                {
                    
                }
            }
            
        }
    </script>
</head>
<body>   
<?php
    
    $stadd=$_POST["stadd"];
    echo $stadd;
    
    
?>
        
<h1 align="center">Forecast Search</h1>
<form name="forecast" action="ForecastSearch.php" method="post">
    <table align="center">
<tr>
    <td><label>Street Adress:*</label></td>
    <td><input type="text" name="stadd"/></td>
</tr>
<br>
<tr>
    <td><label>City:*</td>
    <td><input type="text" name="city"></td>
</tr>
    
<tr>
    <td><label>State:*</label></td>
    <td>
<select name="statenames" id="names">
<option value="default">Select your state....</option>
    <option value="AL">Albama</option>
    <option value="AK">Alaska</option>
    <option value="AZ">Arizona</option>
    <option value="AR">Arkansas</option>
    <option value="CA">California</option>
    <option value="CO">Colorado</option>
    <option value="CT">Connecticut</option>
    <option value="DE">Delaware</option>
    <option value="DC">District of Columbia</option>
    <option value="FL">Florida</option>
    <option value="GA">Georgia</option>
    <option value="HI">Hawaii</option>
    <option value="ID">Idaho</option>
    <option value="IL">Illinois</option>
    <option value="IN">Indiana</option>
    <option value="IA">Iowa</option>
    <option value="KS">Kansas</option>
    <option value="KY">Kentucky</option>
    <option value="LA">Louisiana</option>
    <option value="ME">Maine</option>
    <option value="MD">Maryland</option>
    <option value="MA">Massachusetts</option>
    <option value="MI">Michigan</option>
    <option value="AL">Albama</option>
    <option value="MN">Minnesota</option>
    
</select>
    </td>
        </tr>
    
<tr>
    <td><label>Degree:*</label></td>
<td><input type="radio" name="temp" id="temp" value="Farenheit" checked=true>Farenheit
<input type="radio" name="temp" id="temp" value="Celsius">Celsius
</td>
    </tr>
    <tr>
    <td> </td>
        <td>
        <input type="submit" name="submit" value="Search" onclick="validateForm()">
                                                                                    
            <input type="button" name="clear" value="Clear" onclick="resetForm()">
        
        </td>
    </tr>
    <tr>
    <td><i>* - Mandatory fields.</i></td>
    </tr>
</table>    
    </form>
   <p align="center"><a href="http://forecast.io/">Powered by Forecast.io</a></p>
    <br>
    
</body>
</html>    
    
    