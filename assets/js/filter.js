// Enter the words to be filtered in the line below:
var swear_words_arr=new Array("bloody","war","terror");

var swear_alert_arr=new Array;
var swear_alert_count=0;
function reset_alert_count()
{
 swear_alert_count=0;
}
function validate_text()
{
 reset_alert_count();
 var compare_text=document.form1.comment.value;
 for(var i=0; i<swear_words_arr.length; i++)
 {
  for(var j=0; j<(compare_text.length); j++)
  {
   if(swear_words_arr[i]==compare_text.substring(j,(j+swear_words_arr[i].length)).toLowerCase())
   {
    swear_alert_arr[swear_alert_count]=compare_text.substring(j,(j+swear_words_arr[i].length));
    swear_alert_count++;
   }
  }
 }
 var alert_text="";
 for(var k=1; k<=swear_alert_count; k++)
 {
  alert_text+="\n" + "(" + k + ")  " + swear_alert_arr[k-1];
 }
 if(swear_alert_count>0)
 {
  alert("The message will not be sent!!!\nThe following illegal words were found:\n_______________________________\n" + alert_text + "\n_______________________________");
  document.form1.comment.select();
 }
 else
 {
  document.form1.submit();
 }
}
function select_area()
{
 document.form1.comment.select();
}
window.onload=reset_alert_count;