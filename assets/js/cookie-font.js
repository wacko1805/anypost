var today = new Date();
  var expiry = new Date(today.getTime() + 30 * 24 * 3600 * 1000); // plus 30 days

  function setCookieFont(name, value)
  {
    document.cookie=name + "=" + escape(value) + "; path=/; expires=" + expiry.toGMTString();
  }
function putCookieFont(form)
  {
   setCookieFont("font", form[1].usrname.value);
   console.log("restting fonts"); 
location.reload();
    return true;
  }
