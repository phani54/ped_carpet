<?php
function make_pages($page,$limit,$total,$filePath,$otherParams)
{
	@$divs=$total%$limit;
	if($divs==0)
	{
	@$tots=(int)($total/$limit);
	}else{
	@$tots=(int)($total/$limit) + 1;
	}
	echo "<a href=\"$filePath?page=".(1)."&$otherParams\"  style='color:#000000;'><i class='fa fa-arrow-left'></i></a>&nbsp;&nbsp;";
	if($tots==1)
	{
	echo "<a href=\"$filePath?page=1&$otherParams\" style='color:#000000;'>1</a>&nbsp;&nbsp;";
	}
	if($tots>1)
	{
		if($page>1)
		{
		echo "<a href=\"$filePath?page=".($page-1)."&$otherParams\"style='color:#000000;'>&laquo;</a>&nbsp;&nbsp;";
		}
if(!empty($page))
{
if(($page-5)>=1)
{
echo "<a href=\"$filePath?page=".($page-5)."&$otherParams\" style='color:#000000;'>".($page-5)."</a>&nbsp;&nbsp;";
}
if(($page-4)>=1)
{
echo "<a href=\"$filePath?page=".($page-4)."&$otherParams\" style='color:#000000;'>".($page-4)."</a>&nbsp;&nbsp;";
}
if(($page-3)>=1)
{
echo "<a href=\"$filePath?page=".($page-3)."&$otherParams\" style='color:#000000;'>".($page-3)."</a>&nbsp;&nbsp;";
}
if(($page-2)>=1)
{
echo "<a href=\"$filePath?page=".($page-2)."&$otherParams\" style='color:#000000;'>".($page-2)."</a>&nbsp;&nbsp;";
}
if(($page-1)>=1)
{
echo "<a href=\"$filePath?page=".($page-1)."&$otherParams\" style='color:#000000;'>".($page-1)."</a>&nbsp;&nbsp;";
}
echo "<a href=\"$filePath?page=$page&$otherParams\"  class='active'>$page</a>&nbsp;&nbsp;";
if(($page+1)<=$tots)
{
echo "<a href=\"$filePath?page=".($page+1)."&$otherParams\" style='color:#000000;'>".($page+1)."</a>&nbsp;&nbsp;";
}
if(($page+2)<=$tots)
{
echo "<a href=\"$filePath?page=".($page+2)."&$otherParams\" style='color:#000000;'>".($page+2)."</a>&nbsp;&nbsp;";
}
if(($page+3)<=$tots)
{
echo "<a href=\"$filePath?page=".($page+3)."&$otherParams\" style='color:#000000;'>".($page+3)."</a>&nbsp;&nbsp;";
}
if(($page+4)<=$tots)
{
echo "<a href=\"$filePath?page=".($page+4)."&$otherParams\" style='color:#000000;'>".($page+4)."</a>&nbsp;&nbsp;";
}
if(($page+5)<=$tots)
{
echo "<a href=\"$filePath?page=".($page+5)."&$otherParams\" style='color:#000000;'>".($page+5)."</a>&nbsp;&nbsp;";
}
}
else
{
if($tots>3)
{
if(1<=$tots)
{
echo "<a href=\"$filePath?page=1&$otherParams\" style='color:#000000;'>1</a>&nbsp;&nbsp;";
}
if(2<=$tots)
{
echo "<a href=\"$filePath?page=2&$otherParams\" style='color:#000000;'>2</a>&nbsp;&nbsp;";
}
if(3<=$tots)
{
echo "<a href=\"$filePath?page=3&$otherParams\" style='color:#000000;'>3</a>&nbsp;&nbsp;";
}
if(4<=$tots)
{
echo "<a href=\"$filePath?page=4&$otherParams\" style='color:#000000;'>4</a>&nbsp;&nbsp;";
}
echo ".........";echo "&nbsp;&nbsp;";
if(($tots-3)>=1)
{
echo "<a href=\"$filePath?page=".($tots-3)."&$otherParams\" style='color:#000000;'>".($tots-3)."</a>&nbsp;&nbsp;";
}
if(($tots-2)>=1)
{
echo "<a href=\"$filePath?page=".($tots-2)."&$otherParams\" style='color:#000000;'>".($tots-2)."</a>&nbsp;&nbsp;";
}
if(($tots-1)>=1)
{
echo "<a href=\"$filePath?page=".($tots-1)."&$otherParams\" style='color:#000000;'>".($tots-1)."</a>&nbsp;&nbsp;";
}
echo "<a href=\"$filePath?page=".($tots)."&$otherParams\" style='color:#000000;'>".($tots)."</a>&nbsp;&nbsp;";
}
else
{
for(@$i=1;$i<=$tots;$i++)
		{
		if($page==$i)
		{
		echo "<a href=\"$filePath?page=$i&$otherParams\" style='color:#000000;'>[$i]</a>&nbsp;&nbsp;";
		}else{
		echo "<a href=\"$filePath?page=$i&$otherParams\" style='color:#000000;'>$i</a>&nbsp;&nbsp;";
		}
		}}
}
}
		if($page<$tots)
		{
		if($page==0)
		{
		echo "<a href=\"$filePath?page=".($page+1+1)."&$otherParams\"style='color:#000000;'>&raquo;</a>&nbsp;&nbsp;";
		}else{
		echo "<a href=\"$filePath?page=".($page+1)."&$otherParams\"style='color:#000000;'>&raquo;</a>&nbsp;&nbsp;";
		}
	}
	echo "<a href=\"$filePath?page=".($tots)."&$otherParams\"style='color:#000000;'><i class='fa fa-arrow-right'></i></a>&nbsp;&nbsp;";
}
?>