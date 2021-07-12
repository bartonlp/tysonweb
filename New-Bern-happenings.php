<?php
// BLP 2021-02-21 -- notedited
// BLP 2021-02-21 -- currently not used  
$_site = require_once(getenv("SITELOADNAME"));
ErrorClass::setDevelopment(true);
$S = new $_site->className($_site);

$h->title = "Tyson Group";
$h->desc = "Tyson Group";

$h->css = <<<EOF
<style>
.h1 { font-size: 2rem; }
.h2 { font-size: 1.5rem; }
.list { list-style-type: disc; }
img { margin-right: 10px; }
</style>
EOF;

list($top, $footer) = $S->getPageTopBottom($h);

echo <<<EOF
$top

<h1 class="center">New Bern Clubs, and Non Profits</h1>
<p>New Bern is a great place to call home with a plethora of clubs, organizations, and 
special events happening year around. No other small town in the country has so much going on.</p>
<div class="h1 center">New Bern Clubs and Orginizations</div>

<ul class="list">
<li>New Bern Lunch Rotary: Meets every Tuesday at 12:30PM at the Chelsea banquet room.</li>
<li>New Bern Breakfast Rotary: Meets every Thursday at 7:30AM at Famouses. Phone: 252-671-2377</li>
<li>New Bern Lions Club: Meets 2nd and 4th Monday at the Big Apple Pizzeria 1150 Broad Creek Rd. New Bern, NC 6.30PM
<a href="http://e-clubhouse.org/sites/newbernnc/" target="_blank">http://e-clubhouse.org/sites/newbernnc/</a>
Call Bobbi Fisher 252-229-0593</li>
<li>Twin rivers Lions Club: 1st and 3rd Thursday, 6:30PM at Courtyard at Berne Village (Club House) 2701 Amhurst Blvd, New Bern, NC</li>
<li>2Carlie Metts: Email: cmetts22@gmail.com,
<a href="http://e-clubhouse.org/sites/twinriversnc/" target="_blank">http://e-clubhouse.org/sites/twinriversnc/</a>
New Bern Civitan Club: Meet Friday at noon at the Golden Corral. Call Henry Martin 633-2484.</li>
<li>Tryon Civitan Club:
<a href=><a href="http://www.newberncivitanclub.org/Calendars.htm" target="_blank">http://www.newberncivitanclub.org/Calendars.htm</a></a></li>
<li>Nurse Corps: St. Paul Visiting Nurse Corps for retired nurses to visit elderly and shut-ins. <i>Volunteers needed</i>.
<a href="https://vva.org/chapter/vva-chapter-886/">Nurse Corps</a></li>
<li>Coastal Women's forum: Networking, encouragement, education, 1st Tuesday, 5:30-7 pm dinner meetings.
<a href=><a href="http://www.coastalwomensforum.com" target="_blank">coastalwomensforum.com</a></a> </li>
<li>Coastal Women's Shelter: Our mission, to help women and children live lives
free of domestic violence and identify and acquire the skills necessary to be self sufficient and good nurturers. Our vision,
to prevent future family and domestic violence and to eradicate existing family violence.
<a href="http://www.coastalwomensshelter.org/" target="_blank">http://www.coastalwomensshelter.org/</a></li>
<li>New Bern Women's Club: Our club is 100+ years old and continues to build on a rich 
legacy of community service. <a href="https://newbernwomansclub.com/" target="_blank">https://newbernwomansclub.com/</a></li>
<li>Grey Ladies and Gentlemen: Craven Regional Hospital 252-633-8111</li>
<li>River Bend Garden Club: Fantastic club if you are interested in gardening.
<a href="http://riverbendgardenclub.org/" target="_blank">River Bend Garden Club</a></li>
<li>New Bern-Havelock Aglow: A nondenominational organization of caring people. The 
work of Aglow is like the hand of God reaching out in a restorative way 
empowering people to serve the lord in all areas of their lives.<br>
New Bern: <a href="http://www.newbernaglow.org/NewBern.html" target="_blank">http://www.newbernaglow.org/NewBern.html</a><br>
Havelock: <a href="http://www.newbernaglow.org/Havelock.htm" target="_blank">http://www.newbernaglow.org/Havelock.htm</a></li>
<li>Christian Business &amp; Professional Women's After 5 Club: 3rd. Monday, 6:30- 8:30. Call 252 637 2826</li>
<li>Christian Women's Club Luncheon: Emerald Golf and Country Club. 3rd Tuesday of each month 11.30AM. 252-638-2468</li>
<li>Antique Automobile Club Of America: 1st. Capital AACA Chapter,
We conduct a monthly dinner and business meeting on the third Monday at the Texas Steakhouse Restaurant, New Bern (3231 Doctor MLK Blvd)
<a href="http://www.ncregionaaca.com/firstcapital/" target="_blank">http://www.ncregionaaca.com/firstcapital/</a></li>
<li>New Bern Corvette Club: 2nd Tuesday, 7PM
<a href="www.twinriverscorvetteclub.com" target="_blank">www.twinriverscorvetteclub.com</a></li>
<li>Colonial Capital Rods and Classics: Open to all car enthusiast whatever your make and model is. <a href="http://www.colonialcapitalrodsandclassics.com">
www.colonialcapitalrodsandclassics.com</a> or call 252-633-0527</li>
<li>istoric Preservation: New Bern has one of the finest historic districts in America. Love history? Join in the 
fun to help preserve the past. New Bern Preservation Foundation 252 633-6448</li>
<li>New Bern Historical Society: 252-635-8558</li>
<li>Tryon Palace Volunteers: 252-514-4900</li>
<li>Neuse River Foundation: The mighty Neuse River needs your help. Years of abuse 
has strained the health of this incredibly beautiful river. To volunteer go to
<a href="http://www.neuseriver.org" target="_blank">http://www.neuseriver.org</a></a>/</li>
<li>Vietnam Veterans of America Chapter #886:
<a href="https://vva.org/chapter/vva-chapter-886/" target="_blank">https://vva.org/chapter/vva-chapter-886/</a><br>
VVA CHAPTER #886, 08 Whitford Ln, New Bern NC 28562 (252) 296-1505.
Email: <a href="mailto:vva886@gmail.com?subject=VVA # 886 Membership">vva886@gmail.com</a></li>
<li>Veterans of Foreign War Post 8094: <a href="http://myvfw.org/nc/post8094/" target="_blank">http://myvfw.org/nc/post8094/</a></li>
<li>Disabled American Veterans:
<a href="http://www.avsops.com/dav-2/dav-796" target="_blank">http://www.avsops.com/dav-2/dav-796</a><br>
Chapter 26 Meetings at the Havelock 
<a href="http://www.avsops.com/dav-2/dav-781" target="_blank">http://www.avsops.com/dav-2/dav-781</a></li>
<li>Richard Dobbs Speight Chapter of the National Society Daughters of the American Revoution:
<a href="http://www.ncdar.org/RichardDobbsSpaight_files/officers.html" target="_blank">http://www.ncdar.org/RichardDobbsSpaight_files/officers.html</a> </li>
<li>Craven Community Concert Band: 
<a href="http://www.cravencommunityconcertband.org/" target="_blank">http://www.cravencommunityconcertband.org/</a> </li>
<li>Yoga: <a href="https://www.ahopefulbalance.com/"target="_blank">https://www.ahopefulbalance.com/</a>
<li>AARP Craven County Charter:
<a href="https://local.aarp.org/new-bern-nc/" target="_blank">https://local.aarp.org/new-bern-nc/</a></li>
<li><a href="https://www.alz.org/nc/">Eastern N.C. Alzheimer's Association:</a> New Bern support group meets 1st 
Wednesday 1-2:30 at the Homeplace,1309 McCarthy Blvd. Call 633-7133 for more information.</li>
<li>Twin Rivers Artist Association: Meets at Craven Arts Council and Gallery, Inc.
317 Middle Street, New Bern, NC, 28560

<a href="https://traa.wildapricot.org/" target="_blank">https://traa.wildapricot.org/</a> </li>
<li>Twin Rivers Quilters: 2nd Thursday, 10AM business meeting. Other Thursday's, 9:30AM stitch and chat.<br>
Tabernacle Baptist Church 616 Broad Street in New Bern,
<a href="http://www.twinriversquiltersguild.com/" target="_blank">http://www.twinriversquiltersguild.com/</a> </li>
<li>Seacoast Spinners and Weavers Guild: 2nd Wednesday Sept-May, 12PM to 1PM, St Andrews Lutheran Church. 252-514-2681
<a href="http://fiberarts.org/directories/guilds/Seacoast_Spinners_and_Weavers_Guild" target="_blank">http://fiberarts.org/directories/guilds/Seacoast_Spinners_and_Weavers_Guild</a>
<li>American Needlepoint Guild: Novice to expert stitchers welcome. Call 252 636 4873.<br>
Meeting Location:	New Bern, Chapter: Crystal Coast Chapter, 
Meeting Address: West New Bern Recreation Center Pinetree Drive, Meeting Time:	1st Monday at 10:00AM.<br>
Chapter Contact:	<a href="crystalcoastchapter@needlepoint.org" target="_blank">Email the Chapter</a>crystalcoastchapter@needlepoint.org</a></li>
<li>Tryon Chapter of the Embroiderer's Guild: 2nd and 4th Monday, 9AM,West New Bern Recreation Center.
252-637-2211
<a href="http://www.egacarolinas.org/chapters/tryon.htm" target="_blank">http://www.egacarolinas.org/chapters/tryon.htm</a></li>
<li>Croatan Quilters Guild: Havelock chapter call (252) 447-4225,
<a href="https://croatanquiltersguild.weebly.com/" target="_blank">https://croatanquiltersguild.weebly.com/</a></li>
<li>Craven County Extension and Community Association: <a href="https://craven.ces.ncsu.edu/" target="_blank">https://craven.ces.ncsu.edu/</a><br>
Cooperative Extension Office, New Bern</li>
<li>Tryon Treasures Doll Club: 1:30-3:30PM,West New Bern Recreation Center. Call Lorraine Weeks 745-7776,
<a href="https://www.facebook.com/Tryon-Treasures-Doll-Club-New-Bern-NC-124162297729566/" target="_blank">https://www.facebook.com/Tryon-Treasures-Doll-Club-New-Bern-NC-124162297729566/</a></li>
<li>Craven County Republican Women: 3rd Wednesday of each month, 11:30AM, meetings held at the Chelsea
<a href="http://www.cravengop.org/craven-county-republican-womens-club-information/" target="_blank">http://www.cravengop.org/craven-county-republican-womens-club-information/</a></li>
<li>Alpenverein: Social Club with interest in European , Germanic cultures. Meets the last Friday of the month. Call 635-2820. </li>
<li>Iota Sigma Zeta Chapter of Phi Beta Sorority: Irish American Cultural Institution. 1st Saturday, 12 noon. Call (252) 671-5947</li>
<li>Craven County Master Gardeners: Meets at the Craven County Cooperative Building. Call (252) 636-6774</li>
<li>Twin  Rivers Shag Club: Come out and learn the famous Carolina shag, a touch dance that's fun and enjoyable for folks of all ages.
Twin Rivers meets every Sunday from 6:30 to 9:30AM at Attitudes Pub and Grill in Riverbend. Call Al 634-2436 for more information 
or visit the web page at 
<a href="http://www.twinriversshagclub.org/">www.twinriversshagclub.org/</a> </li>
<li>Christian Singles 50+: 6PM Golden Corral 400 Hotel Drive. Call 638-5466 for information.</li>
</ul>
<p>
<b> USFA Fencing Club </b> </p>
<p>
Call for meeting dates </p>
<p>
252-637-1891 </p>
<p>
<b> Outdoor Adventure Club </b> </p>
<p>
3rd Tuesday, 7-9pm </p>
<p>
West New Bern recreation center </p>
<p>
Adventure trips and activities </p>
<p>
252-636-4061 </p>
<p>
252-633-8790 </p>
<p>
<b> Hooked on Walking </b> </p>
<p>
9 A.M. Creekside Park. New adult 
walking club now forming. For information call 252-634-9083 or 
252-633-9842 </p>
<p>
<b> New Bern Bridge Club </b> </p>
<p>
Call 252-638-1186 for meeting 
information </p>
<p>
<b> New Bern Chess Club </b> </p>
<p>
Free chess lessons. Call Rodger Sample 
at 252-288-4145 </p>
<p>
<b> Southern Gentlemen's Barbershop 
Chorus </b> </p>
<p>
Each Monday, 7pm, Colony Baptist Church </p>
<p>
252-0638-6870 or 252 637 6235 </p>
<p>
<b>New Bern Ladies Barbershop Chorus</b>  </p>
<p>
Each Monday, 7pm </p>
<p>
Garber United Methodist Church </p>
<p>
252-638-5142 </p>
<p>
<b> National Active and Retired 
Federal Employees </b> </p>
<p>
3rd Thursday, 5:30 pm, Golden Corral </p>
<p>
call 252-637-9644 </p>
<p>
<b> New Bern Amateur Radio club </b> </p>
<p>
1st Thursday,6:30pm </p>
<p>
Famous Subs and Pizza </p>
<p>
Call 252-447-8338 </p>
<p>
<b> New Bern Computer Users Group </b> </p>
<p>
For information go to  </p>
<p>
<a href="http://www.nbcug.com">
www.nbcug.com</a> </p>
<p>		 <b> New Bern Mac Users Group </b> </p>
<p>
For meeting information go to </p>
<p>
<a href="mailto:nbmug@yahoogroups.com">nbmug@yahoogroups.com</a>  or 
call 252-635-3322 </p>
<p>
<b> New Bern Garden Club </b> </p>
<p>
2nd Thursday, 9:30am, </p>
<p>
Trinity United Methodist Church </p>
<p>
252-638-5738 </p><a href="https://www.facebook.com/NBGC1926/" target="_blank">https://www.facebook.com/NBGC1926/</a>
<p>
<b> Craven Pamlico Beekeepers 
Association </b> </p>
<p>
Meetings held at the Craven County 
Agricultural Center. For more information call 252 633 3147. </p>
<p>
<b> US Coast Guard Auxiliary Flotilla 
20-4 </b> </p>
<p>
1st Thursday, 7-9pm </p>
<p>
Garber Church </p>
<p>
252-633-9576  </p>
<p>
<b>Cape Lookout Sail and Power Squadron</b>  </p>
<p>
Call Bill Hayden 252-672-1846 </p>
<p>	
<b> New Bern Yacht Club </b> </p>
<p>
4th Tuesday, 7:30 pm </p>
<p>
1206 Brices Creek Road </p>
<p>
Recreational boating, social 
activities, public service. </p>
<p>
252-634-2626 </p>
<p>
<b>Table Tennis club</b>  </p>
<p>
Each Thursday, 6-9pm </p>
<p>
West New Bern Recreation Center </p>
<p>
252-636-4837 </p>
<p>
<b> United States Equine Rescue League </b> </p>
<p>
2nd Wednesday, 7pm, Golden Corral </p>
<p>
Call 252-447-859 </p>
<p>
volunteer@userl<a href="mailto:nccc@userl.org">nccc.org</a> </p>
<p>
<b> Eastern NC Rose Society </b> </p>
<p>
Affiliated with the American Rose 
Society. They meet the first Saturday of the month at 10:a.m. at Craven 
County Cooperative Extension Center. Contact 
<a href="mailto:MarySnyder@ec.rr.com">MarySnyder@ec.rr.com</a> </p>
<p>
<b> Colonial Capital Humane Society </b> </p>
<p>
4th Thursday, 7pm, West New Bern 
Rec.Center. </p>
<p>
Call 252 633 0146 </p>
<p>
<b> Craven County Genealogical Society </b> </p>
<p>
2nd Tuesday of the month 
at 7:p.m. 1207 Forrest Drive. For more information call 252--514-0614 or 
<a href="http://www.cravengenealogy.org">www.cravengenealogy.org</a> </p>
<p>
<b> Tri-County Genealogy </b> </p>
<p>
Searches of Pamlico, Craven, and 
Beaufort Counties. Meets the 2nd Tuesday of each month. 7-8 P.M. at the 
Pamlico County Library in Bayboro. Contact  </p>
<p>
<font color="#008000">
<a style="color: blue; text-decoration: none; font-weight: bold" href="mailto:fluffy@cconnect.net">
fluffy@cconnect.net</a> for more information </p>
<p>
<b> Cyclist  </b> </p>
<p>	
<b>Flythe's Cycling Group:</b>
<font size="4">
<a eudora="autourl" href="http://pages.suddenlink.net/davew/nbcc.htm">
http://pages.suddenlink.net/davew/nbcc.htm</a>  Roadbikes/recumbents 
depart from Flythe's bike shop on Trent Rd. every Sunday, weather 
permitting, at 8:30 AM sharp for a 35 or 50 mile ride. They pass River 
Bend Shell station at approximately 8:50 AM where cyclists from Riverbend join 
the group. Average saddle speed is usually around 16-17 mph. </p>
<p>
<b><font size="4">Pickin and Grining </b> </p>
<p>
<b>Pickin &amp; Grinin Group:</b>
<font size="4">
<a eudora="autourl" href="http://pages.suddenlink.net/davew/pickin.htm">
http://pages.suddenlink.net/davew/pickin.htm</a><br>
<br>
Plays every Friday night in Twin Rivers Mall from 7-9 PM in what was 
once the Brody mens store between the center court and Belks. We had a 
big audience and over 20 players/singers last Friday night. Amateurs are 
welcome to join in and may request to be on the Pickin e-mail list. The 
group has been playing for 7 years and has 143 members, not all active.
</p>
<p>
<b> <font size="4">New Bern Computer Users Group  
</b></p>
<p>
<font size="4">Meets monthly on the third Saturday at 
the Knights of Columbus hall at 1125 Pinetree Street. Social hour/free 
coffee/flea market from 8-9 AM. Program 9-10:30 AM. Admission $3 to pay 
K of C rent. <br>
<a eudora="autourl" href="http://www.nbcug.com/">http://www.nbcug.com/</a>
</p>
<p>
<b><font size="4">H.E.A.R. Group </b> </p>
<p>
<font size="4">(hearing loss) meets 7:P.M. on the 4th 
Tuesday.  </p>
<p>
<font size="4">Call 1-800-205-9925  </p>
<p>
<b><font size="4">Craven County Taxpayers 
Association </b> </p>
<p>
<font size="4"><b>636 5792</b> </p>
<p>
<font size="4"><b>
<a href="http://www.cctaxpayers.org">www.cctaxpayers.org</a></b> </p>
<p>
<font size="4"><b>Craven County Republican Party-</b>  <font size="4">Meets the 4th Thursday of the month at 
7 PM at the Golden Corral. Call 252 633 5766  </p>
<p>
<font size="4"><b>Scottish Heritage Society</b>  </p>
<p>
<font size="4">Anyone interested in membership is 
welcome </p>
<p>
<font size="4">Call Lori Friese at 444-2624 </p>
<p>
<b><font size="4">Carolina Coastal Railroaders </b> </p>
<p>
Call 638-8872 for scheduled meetings </p>
<p>
<b><font size="4">The Bay River Trap Club </b> </p>
<p>
<font size="4">Shoot Wed. and Fri. </p>
<p>
<font size="4">Call 252 633 9784 </p>
<p>
<b><font size="4">East Carolina Saltwater Fishing Club </b> </p><a href="http://pages.suddenlink.net/ecsfc/contacts.html" target="_blank">http://pages.suddenlink.net/ecsfc/contacts.html</a>
<p>
<font size="4">Meetings 6:30 PM on the first Tuesday of 
each month at Famous Subs-2210 Neuse Blvd, New Bern.. </p>
<p>
<font size="4"><b>Twin Rivers Paddle Club</b>  </p>
<p>
<font size="4">Monthly meetings are usually held 
on the second Tuesday of each month. </p>
<p>
<font size="4">For information on events and 
excursions call 252 633 6553 </p> Go online <a href="http://twinriverspaddleclub.org/" target="_blank">http://twinriverspaddleclub.org/</a>
<p>
<b>  Support Groups  </b></p>
<p>
<b> Craven County Alcoholics Anonymous </b> </p>
<p>
306 Avenue D New Bern </p>
<p>
<b> Craven County Men's Alcoholics 
Anonymous </b> </p>
<p>
8:30 am Saturdays </p>
<p>
306 Avenue D, New Bern </p>
<p>
Closed meeting, Men only </p>
<p>
<b> Woman's Step Study AA </b> </p>
<p>
10:am Saturday Mornings at Trinity United Methodist Church, 
2311 Elizabeth Ave, New Bern, NC 28562</p>
<p>
Closed meeting, Women only. </p><p>
<b> Woman's BIG BOOK Study AA </b> 
<p>6:15PM Every Monday at Trinity United Methodist Church, 
2311 Elizabeth Ave, New Bern, NC 28562</p>
<p>
<b> Eastern NC Alzheimer's 
Association </b> </p>
<p>
1st Wednesday, 1-2.30 pm </p>
<p>
Call 252-633-7133 </p>
<p>
<b> Craven County Narcotics Anonymous </b> </p>
<p>
<a href="https://www.sober.com/meetings/na" target="_blank">https://www.sober.com/meetings/na</a> </p>
<p>
<b><font size="4">TOPS </b> </p>
<p>
Take off pounds sensibly </p>
<p>
Call Maxine Willard </p>
<p>
223-4514 </p>
<p>
<b> Celebrate Recovery </b> </p>
<p>
Meets each Monday, free support group 
for people with hurts, habits, or hangouts, open to everyone. Meets at 
Temple Baptist Church, 5:30pm BBQ, 6:15pm. recovery celebration, 7:15pm 
support group, 8:15pm solid rock cafe. Call 252 633 3330. </p>
<p>
<b>Mealson wheels </b> </p>
<p>	
If you or someone you know is 
homebound, 60 years old or older and unable to prepare a meal you may be 
eligible for the Meals on Wheels program. There is no charge for this 
program. Call Sue 638 1790. </p>
<p>
<b> Coastal Brain Injury and Support 
Group </b> </p>
<p>
1st. Saturday, 10am., Homeplace 
Assisted Living </p>
<p>
Call 252 637 1280 </p>
<p>
<b>Coastal Stroke Club </b> </p>
<p>
1st Saturday, 10am, Coastal Rehab 
Center </p>
<p>
Call 252 634 6722 </p>
<p>
<b> Diabetes Support Group </b> </p>
<p>
3rd Tuesday, 7pm </p>
<p>
Call 252-633-8160 </p>
<p>
<b>Craven County Arthritis Support Group</b> </p>
<p>
Meetings held at the Craven County Health Dept.</p>
<p>
Call 252 636 4920 for information</p>
<p>
<b> Look Good, Feel better </b> </p>
<p>
Free session for women to deal with 
appearance related changes from cancer treatment. </p>
<p>
<b> Man to Man Educational Support 
Group </b> </p>
<p>
2nd Thursday, 9am, Golden Corral </p>
<p>
American Cancer Society </p>
<p>
252-633-879 </p>
<p>	
<b>New Hope Builders Self Advocacy Group</b> </p>
<p>
1st Thursday, 6:30 </p>
<p>
West New Bern Parks and Recreation Center</p>
<p>
252-639-7763</p>
<p>	
<b><font size="3" face="Arial">Community Coalition against 
family violence </b> </p>
<p>
2nd Monday, 7pm, Ward and Smith law 
firm. </p>
<p>
252-636-3381
<a href="http://www.theresnoexcuse.com">www.theresnoexcuse.com</a> </p>
<p>
<b> Special Events </b>  
<i>
<font size="4" face="Arial">New Bern Idol tryouts </i>
<font size="4" face="Arial">Spin off of 
American Idol. West New Bern Recreation Center. Call 252 639 2912 or 639 2902 
for more information. </p>
<p>
<h2>New Bern is looking for volunteers</h2>
<p><img border="0" src="/images/volunteer.jpg" width="121" height="121" alt="New Bern NC needs volunteers. Sign up today."></p>
<p>
<b>
What makes New Bern such a special 
place to live? The people. The Baby Boomer's moving here from many different 
areas of the country are contributing significantly to the many clubs, 
churches, organizations, and non profits in New Bern. Their spirit of volunteerism is 
making New Bern a better place to live. Scroll down to see what you can do to 
get involved. </b><b> Volunteers Needed  </b></p>
<p>
<b>  Catholic Charities 
Senior Pharmacy Program  </b></p>
<p>The Senior Pharmacy 
needs volunteers to assist with many tasks. If you can help call  
638-3657  for additional information. </p>
<p><b> Nurses needed</b></p>
<p>
Merci Client is in urgent need of volunteers nurses to provide 
compassionate health care to the uninsured adults of our area.</p>
<p>Call 633-1599</p>
<p>  <b> Radio Reading Service </b> </p>
<p>
needs volunteers 2-5 p.m. Mon through Sunday to read to the print 
handicapped. Volunteers need only commit 1 day per month. Call Jake Postma 916 2201 </p>
<p>
<b> Tutors needed</b></p>
<p>
Interfaith Refugee 
Ministry. English tutors needed to work with refugees and other 
non-English speaking individuals. Training and resources provided. Call 
Susan Husson, 633 9009. </p>
<p>
<b> Nurses Needed </b> </p>
<p>
Merci clinic is in 
urgent need of volunteer nurses to help provide health care to the 
uninsured adults in our area. Nurses are needed for patient assessment 
and assistance with medical care. </p>
<p>
Call 633 1599 </p>
<p>
<b> Drivers Needed </b> </p>
<p>
Disabled American veterans. Volunteers 
drivers are needed to transport veterans one day a month in DAV-owned 
vans to VA medical centers in Durham, Greenville, or Morehead City. Call 
636-2789 </p>
<p>
<b> Habitat for Humanity </b> </p>
<p>
Volunteers needed for staffing the 
restore and for helping at<b> </b>several construction sites.  </p>
<p>
call 808 2757 </p>
<p>
<b> Guardian Ad Litem (GAL)</b> </p>
<p>
Volunteer advocates needed 
to investigate and make recommendations for a safe place and serve in 
court petitions involving abused and neglected children. </p>
<p>
Kathryn A. Chandler-GAL Supervisor<p>PO BOX 1275
New Bern, NC  28563
Judicial District 3B
</p><p>Office 252-639-3232 Mobile 252-571-3131<p>
<b> Catholic Charities Senior 
Pharmacy Program </b> </p>
<p>
Has openings for new clients ages 60 
and over. Program provides vouchers to help with prescription costs and 
limited medical supplies.  </p>
<p>
Call Maxine Tyndall 638 3657 </p>
<p>  
<b>Disabled American Veterans Chapter 40</b> </p>
<p>
Needs volunteers to transport veterans once a month in a DAV 
van to VA center in Durham, Greensboro, and Morehead.</p>
<p>
Call Dave at 638-5900</p>
<p>
<b>Ham Operators</b> </p>
<p>
Coast Guard auxiliary is looking for volunteers to become 
members of the Auxiliary Network. This network is used as a backup to the Coast 
Guard's primary VHF communication and a primary network in no coverage areas. 
Visit <a href="http://www.cgaux.org">www.cgaux.org</a></p>
<p> 
<b> Adolescent Parenting Program </b> </p>
<p>
Volunteers are needed to help teen 
mothers in the Adolescence parenting program of Craven County Department 
of Social Services to cope with pregnancy and new motherhood. Call Joann 
Real 636 6472. </p>
<p>
<b> Foster Grandparent needed </b> </p>
<p>
Coastal Community Action, Inc. Senior 
Corp Program . Senior companion volunteers needed to provide services in 
Carteret, Craven, Jones, and Pamlico County. Volunteers must be 60 and 
older and available an average of 20 hours a week. Call 223 1651. </p>
<p>
<b> Continuum Hospice needs 
volunteers </b> </p>
<p>
Volunteers are trained to support 
patients and families facing a terminal illness. We offer group as well 
as individual training for those who are interested in this rewarding 
work. For more information call 638 6821. </p>
<p>
<b> Twin Rivers YMCA </b> </p>
<p>
Volunteers needed to help with 
homework, tutoring, arts and crafts, and organized games from 3 to 6 
p.m. Retirees welcome. Call Danisha at 638 8799 </p>
<p>
<b> Civil War Group </b> </p>
<p>
27 th. NC regiment </p>
<p>
Local Civil War reenactment unit 
seeking recruits for upcoming campaigns. The 27th portrays a typical 
Confederate infantry regiment during the war between the states. Call 
Bryan 919 467 9342. </p>
<p>
<b> Pamlico County Historical 
Association </b> </p>
<p>
Call George Peacock, 252-745-3996

The Tyson Group  </b> </p>
<p>
<p><b> 252 514 9157 Cell. </b></p>
<p>To Search all Havelock and New Bern 
Homes for Sale<br> </p>
<h2><p><a><b><i>Click Here</i></b></a></p></h2>
<p>					
<hr>

$footer
EOF;

