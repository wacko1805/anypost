var today = new Date();
  var expiry = new Date(today.getTime() + 30 * 24 * 3600 * 1000); // plus 30 days

  function setCookie(name, value)
  {
    document.cookie=name + "=" + escape(value) + "; path=/; expires=" + expiry.toGMTString();
  }
function putCookie(form)
  {
   setCookie("colour", form[0].usrname.value);
   console.log("setting cookie color");
location.reload();
    return true;
  }

  function delCookie() {
    document.cookie = "colour=; expires=Thu, 01 Jan 1970 00:00:00 GMT";
    console.log("Resetting color cookie"); 
    location.reload();
    return true;}