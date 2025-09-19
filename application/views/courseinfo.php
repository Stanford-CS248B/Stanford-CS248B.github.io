
<?php

function make_url($first, $second) {
  return $first . '/' . $second;
}

function debug_to_console($data) {
  $output = $data;
  if (is_array($output))
      $output = implode(',', $output);

  echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}

?>

<div class="home_container">

<div style="font-size: 12pt; padding: 10px 0px 0px 0px;" class="home_title">Stanford CS248B, fall 2024</div>
<div style="padding-top: 0px; padding-bottom: 20px;" class="home_title"><span style="padding-top: 0px; padding-bottom: 0px; font-size: 30pt;">Fundamentals of Computer Graphics:</span><br>Animation and Simulation</div>
<div style="padding-bottom: 15px;">

<div><b>Instructors: </b><a href="https://graphics.stanford.edu/~djames/">Doug James</a> and <a href="https://tml.stanford.edu/people/karen-liu">Karen Liu</a></div>
<div><b>Time: </b>Tuesday and Thursday 1:30-2:50PM (First class on 9/24)</div>
<div><b>Location: </b>Gates B3 and on Zoom via SCPD</div>

</div>

<div class="overview_main_item overview_ruled_element">Course Description</div>

<p style="padding-bottom: .15em"> This course provides a comprehensive introduction to computer graphics, 
focusing on fundamental concepts and techniques in Computer Animation and Physics Simulation. Topics include numerical integration, 
3D character modeling, keyframe animation, skinning/rigging, inverse kinematics, rigid body dynamics, 
deformable body simulation, and fluid simulation.   </p>

<div class="overview_main_item overview_ruled_element">Instructors</div>

<div class="indented_block">

<div style="width: 360px; float: left;">
<img src="<?php echo make_url($staff_photos_url,'doug.jpeg'); ?>" width="100" height="100" style="float: left; margin-right: 20px; border: #808080 1px solid;" />
<div><a href="https://graphics.stanford.edu/~djames/">Doug James</a></div>
<div>[djames at stanford] </div>
<div></div>
<!-- <div>Office hours: </div> -->
<div style="clear: both;">&nbsp;</div>
</div>

<div style="width: 360px; float: left;">
<img src="<?php echo make_url($staff_photos_url, 'karen.png'); ?>" width="100" height="100" style="float: left; margin-right: 20px; border: #808080 1px solid;" />
<div><a href="https://tml.stanford.edu/people/karen-liu">Karen Liu</a></div>
<div>[ckliu38 at stanford]</div>
<div></div>
<!-- <div>Office hours: </div> -->
<div style="clear: both;">&nbsp;</div>
</div>

<div style="clear: both;">&nbsp;</div>


<div class="overview_minor_item" style="clear: both; padding-top: 2em; padding-bottom: 2em;">Your fun and helpful TAs:</div>

<div style="width: 360px; float: left;">
<img src="<?php echo make_url($staff_photos_url, 'eris.jpeg'); ?>" width="100" height="100" style="float: left; margin-right: 20px; border: #808080 1px solid;" />
<div class="ta-name">Jiayi Eris Zhang</div>
<div>[eriszhan at stanford]</div>
<!-- <div class="bold_text">Office hours:</div> -->
<div></div>
<!-- <div>Location: Smith Hall 234</div> -->
<div style="clear: both;">&nbsp;</div>
</div>

<div style="width: 360px; float: left;">
<img src="<?php echo make_url($staff_photos_url, 'jiaman.jpg'); ?>" width="100" height="100" style="float: left; margin-right: 20px; border: #808080 1px solid;" />
<div class="ta-name">Jiaman Li</div>
<div>[jiamanli at stanford]</div>
<!-- <div class="bold_text">Office hours:</div> -->
<div></div>
<!-- <div>Location: Smith Hall 234</div> -->
<div style="clear: both;">&nbsp;</div>
</div>

<div style="clear: both;">&nbsp;</div>

</div> <!-- indented -->

<div class="overview_main_item overview_ruled_element">Prerequisites</div>

<p> <span class="bold_text">CS 107, MATH 51 </p>

<div class="overview_main_item overview_ruled_element">Textbook</div>

<p> There is no required textbook for CS248B.</p>

<!-- <p>
<div>David E. Culler and Jaswinder Pal Singh, with Anoop Gupta</div>
<div>Parallel Computer Architecture: A Hardware/Software Approach. Morgan Kaufmann, 1998</div>
<div><a href="http://www.amazon.com/Parallel-Computer-Architecture-Hardware-Software/dp/1558603433" target="_blank">[ On Amazon ]</a></div>
</p> -->

<p>
</p>

<div class="overview_main_item overview_ruled_element">Office Hour Calendar</div>

<p>Some OHs are virtual, and some are hybrid. Please log into Canvas for the OH Zoom links.</p>

<iframe src="https://calendar.google.com/calendar/embed?src=afc2b52e0d1aafd8f6d8c877b54bde572daf2f877fae27e0e0fbdd1be57fb537%40group.calendar.google.com&ctz=America%2FLos_Angeles" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>

<div class="overview_main_item overview_ruled_element">Discussion Boards</div>

<p>We will be using Ed for general class announcements and discussions. The CS248B Ed page is located <a href="https://edstem.org/us/courses/47420" target="_blank">here</a>.
We also have a canvas page <a href="https://canvas.stanford.edu/courses/180237">here</a>.</p>

<div class="overview_main_item overview_ruled_element">Assignments and Exams (What you'll be doing!)</div>

<p>
<span class="italic_text">Programming assignments.</span> Students
will complete three programming assignments.  
<!-- Assignment 1 will be
performed individually. The remaining three assignments may be
performed in groups of at most two. Although it is not necessary to
have a partner in 15-418/618, it is highly recommended. -->
</p>

<p>
<span class="italic_text">Written homework.</span> Students
will complete four written homework.  
<!-- Assignment 1 will be
performed individually. The remaining three assignments may be
performed in groups of at most two. Although it is not necessary to
have a partner in 15-418/618, it is highly recommended. -->
</p>

<!-- <p><span class="italic_text">Take home quizzes.</span> Students will
complete take-home quizzes assigned every two weeks (six in
total). Quizzes will be released on Wed night and be due the next
Friday at 10am. These quizzes must be completed individually without
discussion with other students, but will be graded on a participation
basis only.  </p> -->

<!-- <p><span class="italic_text">Making per-lecture comments.</span> Each
student must individually contribute one interesting comment per
lecture using the course web site.</p> -->

<!-- <p><span class="italic_text">Final project.</span> Over the last six
weeks of the course students will propose and complete a self-selected
final project.  The final project can be performed individually or in
groups of two. Each team will present the project orally during the
15-418/618 Parallelism Competition and produce a detailed write-up
describing their work and results.</p> -->


<p>
<span class="italic_text">Exams.</span> There will be no exams in this course.
</p>

<!-- <div class="overview_main_item overview_ruled_element">Grading</div>

<ul>
<li>Programming Assignments (4): 7&#37; + 10&#37; + 12&#37; + 10&#37; = <span class="colored_text">39&#37;</span></li>
<li>Exams (2):  <span class="colored_text">28&#37;</span></li>
<li>Final Project: <span class="colored_text">28&#37;</span></li>
<li>Participation (quizzes and on-line comments): <span class="colored_text">5&#37;</span></li>
</ul> -->

<!-- <p> -->

<!-- <span class="italic_text">Late hand-in policy.</span> Each student is
allotted a total of <span class="bold_text">five late-day
points</span> for the semester. Late-day points are for use on
programming assignments only. (They cannot be used for quizzes or
final projects) Late-day points work as follows:</p>

<ul>
<li>A one-person team can extend a programming assignment deadline by one day using one point.</li>
<li>A two-person team can extend a programming assignment deadline by one day using two points. <br/>(e.g., one point from each student)</li>
<li>If a team does not have remaining late day points, late hand-ins will incur a 10&#37; penalty per day <br/>(up to three days per assignment).</li>
<li> No assignments will be accepted more than three days after the deadline.</li>
</ul> -->

<p>
<span class="italic_text">Late hand-in policy.</span>
Each student has a total of <span class="bold_text">9 late days for 4 written homeworks + 3 programming assignments</span>. Using 1 late day extends the deadline by 24 hours.
There is no limit on the number of late days per homework/assignment. No homework/assignment will be accepted for more than 9 days after the deadline.
Late homework/assignments will not be accepted if you are out of late days, so use the late days wisely!</p>

<p>
<span class="italic_text">Grade breakdown</span><br>
<ul>
<li>HW1 10% </li>
<li>HW2 10% </li>
<li>HW3 10%</li>
<li>HW4 10%</li>
<li>P1 20%</li>
<li>P2 20%</li>
<li>P3 20%</li>
</p>

<!-- <div class="overview_main_item overview_ruled_element">Collaboration Policy</div>

<p> Students in 15-418/618 are absolutely encouraged to talk to each
other, to the TAs, to the instructors, or to anyone else about course
assignments. Any assistance, though, must be limited to discussion of
the problems and sketching general approaches to a solution. Each
programming project team must write their own code and produce their
own writeup.

<span class="bold_text">Consulting another student's or
team's solution, or solutions from the internet, is prohibited on assignments. These
and any other form of collaboration constitute
cheating.</span> If you have any question about whether some activity
would constitute cheating, just be cautious and ask the instructors
before proceeding!</p>

<p> You may not supply code, assignment writeups, or exams you
complete during 15-418/618 to other students in future instances of
this course or make these items available (e.g., on the web) for use
in future instances of this course (just as you may not use work
completed by students who've taken the course previously).  We
encourage you to use public source control hosts like <a
href="http://www.github.com">Github</a> for your assignments, however
please be sure to make your programming assignment repositories private.</p> -->

<p>&nbsp;</p>

</div>
