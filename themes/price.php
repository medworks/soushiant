<?php
$html="<table border='0' cellpadding='0' cellspacing='0'><tbody>";

$html.=<<<cd
		<tr>
			<td class="tdtitle" style="border-right: 1px solid transparent;">نام سرویس: ---</td>
			<td colspan="4" class="tdtitle" style="border-left:  1px solid transparent;">سرعت: 128/128 کیلو بیت بر ثانیه</td>
		</tr>
		<tr>
			<td class="tdbox" valign="baseline" width="*">مدت سرویس</td>
			<td class="tdbox align-c" valign="baseline" width="100">یک ماهه</td>
			<td class="tdbox align-c" valign="baseline" width="100">سه ماهه</td>
			<td class="tdbox align-c" valign="baseline" width="100">شش ماهه</td>
			<td class="tdbox lcol align-c" valign="baseline" width="100">یک ساله</td>
		</tr>
			<tr>
			<td class="tdbox" valign="baseline">میزان ترافیک/ گیگا بایت</td>
			<td class="tdbox align-c" valign="baseline">۳</td>
			<td class="tdbox align-c" valign="baseline">۶</td>
			<td class="tdbox align-c" valign="baseline">۱۰</td>
			<td class="tdbox lcol align-c" valign="baseline">۱۵</td>
		</tr>
		<tr>
			<td class="tdbox" valign="baseline">هزینه اشتراک/ تومان</td>
			<td class="tdbox align-c" valign="baseline"><a href="#">۱۳٫۹۰۰</a></td>
			<td class="tdbox align-c" valign="baseline"><a href="#">۲۹٫۹۰۰</a></td>
			<td class="tdbox align-c" valign="baseline"><a href="#">۵۲٫۹۰۰</a></td>
			<td class="tdbox lcol align-c" valign="baseline"><a href="#">۸۷٫۹۰۰</a></td>
		</tr>
		<tr>
			<td class="tdbox even" valign="baseline">متوسط هزینه هر ماه/ تومان</td>
			<td class="tdbox even align-c" valign="baseline">۱۳٫۹۰۰</td>
			<td class="tdbox even align-c" valign="baseline">۹٫۹۰۰</td>
			<td class="tdbox even align-c" valign="baseline">۸٫۸۰۰</td>
			<td class="tdbox lcol even align-c" valign="baseline">۷٫۳۰۰</td>
		</tr>
cd;

$html.=<<<cd
	</tbody></table>
cd;

echo $html;
?>