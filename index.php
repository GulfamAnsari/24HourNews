<html>
<head>
</head>
<body>

<form>
<select onchange="showRSS(this.value)">
<option value="">Select an RSS-feed:</option>
<option value="Google">Google News</option>
<option value="NBC">NBC News</option>
</select>
</form>
<br>
<div id="rssOutput">RSS-feed will be listed here...</div>


<!--Scripts-->
<script src="news.js"></script>
</body>
</html>