var status = 1;




function OpenCloseMenu()
{

if(status == 1)
{
  document.getElementById("Menu").style.left = "0px";

status = 0;
}
else if (status == 0) {
  document.getElementById("Menu").style.left = "-650px";
  status = 1;

}



}
