var dest=document.getElementById("generic"),fallback=document.getElementById("fallback"),request=new XMLHttpRequest;request.open("GET","shared.html",!0),request.onreadystatechange=function(){if(4===this.readyState)if(this.status>=200&&this.status<400){var e=this.responseText;dest.innerHTML=e}else fallback.innerHTML='<a href="./">General press kit for Lorenzo Wood</a>'},request.send(),request=null;