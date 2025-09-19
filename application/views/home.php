<?php

function make_url($first, $second) {
  return $first . '/' . $second;
}

?>

<div class="home_container">

<div style="font-size: 12pt; padding: 10px 0px 0px 0px;" class="home_title">Stanford CS248B, fall 2024</div>
<div style="padding-top: 0px; padding-bottom: 5px;" class="home_title">
<span style="padding-top: 0px; padding-bottom: 0px; font-size: 30pt;">Fundamentals of Computer Graphics:</span><br>Animation and Simulation</div>

<!--

<div class="bold_text colored_text">

<p style="font-size: 14pt;">NOTE TO STUDENTS ON THE SPRING 2017 WAITLIST:</p>

<p>We are excited that so many students are interested in 418/618.
This year, we expect to be able to accommodate approximately 200
students in 15-418/618.</p>

<p style="font-size: 14pt;">YOUR ORDER ON THE WAITLIST IN S3 DOES NOT MATTER.</p>

<p>After handling special requests and students with a particular need
to take 418/618 to graduate (please come talk to us if you're one of
those folks), it is Prof. Kayvon and Prof. Bryant's policy to clear
the waitlist in the order that interested students hand in "A-quality"
implementations of assignment 1 prior to the course add deadline (the
end of the second week of class).  Assignment 1 is out and available
below.  Lecture 2 material is necessary to complete the assignment.
</p> </div>

-->

<div><img style="padding-bottom: 5px;" src="<?php echo make_url($content_base_url, "article_images/teaser.png"); ?>" width="795" height="160"></div>

<p style="padding-bottom: .15em"> This course provides a comprehensive introduction to computer graphics, 
focusing on fundamental concepts and techniques in Computer Animation and Physics Simulation. Topics include numerical integration, 
3D character modeling, keyframe animation, skinning/rigging, inverse kinematics, rigid body dynamics, 
deformable body simulation, and fluid simulation.   </p>

<div class="overview_main_item overview_ruled_element">Pinball Student Showcase</div>
<p style="padding-bottpm: .15em"> Watch some of the best Pinball games created by previous students during this class!</p>
<iframe width="648" height="420" src="https://www.youtube.com/embed/vP8IguilJ-o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

<div class="overview_main_item overview_ruled_element">Basic Info</div>

<div style="padding-bottom: 15px;">
<div><b>Instructors: </b><a href="https://graphics.stanford.edu/~djames/">Doug James</a> and <a href="https://tml.stanford.edu/people/karen-liu">Karen Liu</a></div>
<div><b>Time: </b>Tuesday and Thursday 1:30-2:50PM (First class on 9/24)</div>
<div><b>Location: </b>Gates B3 (in person) and streamed live & recorded using Panopto (see links in Canvas)</div>

<div style="padding-top:1em;">See the <a href="<?php echo site_url('courseinfo'); ?>">course info</a> page for more info on policies and logistics.</div>
</div>

<div class="overview_main_item overview_ruled_element">fall 2024 Schedule</div>

<p>Lectures for each class will be made available shortly before class.</p>

<table>

<?php

function lecture_def($date, $title, $link, $fmt='', $extras=array()) {
    return array('date' => $date,
                 'title' => $title,
                 'link' => $link,
                 'format' => $fmt,
                 'deadlines' => $extras);
}

// function func($arr, $idx) {
//     foreach ($arr as $ele) {
//         if ($ele->number === $idx) {
//             return $ele->shortname;
//         }
//     }
//     return '';
// };

/*
 * ======================================================================
 * =========== BEGIN LECTURES ARRAY =====================================
 * ======================================================================
 * 
 * Make a list of lectures here:
 *
 * Format of lecture_def() is:
 *     - Date of lecture (as a string)
 *     - Lecture Name
 *     - Url for lecture (If the lecture has been given, this is link to lecture summary page, else it's just '')
 *     - optional formatting options (only 'bold' is supported)
 *     - Array of sublines (often used for due dates)
 *
 * Here are some examples:
 * 
 * A lecture with a url:
 *    lecture_def('Jan 12', 'Why Parallelism?', lecture_url('whyparallelism'))
 * 
 * A lecture with no url since the lecture has not been given yet:
 *    lecture_def('Jan 12', 'Why Parallelism?', '', 'bold')
 *
 * More complicated:
 *
 * A lecture with multiple assignment due dates on the same day:
 *    lecture_def('Jan 21', 'Parallel Programming Models and their Corresponding HW/SW Implementations', lecture_url('progmodels'), '',
 *                array('Quiz 1 due (on Thu Jan 22)', 'Assignment 1 due (on Fri Jan 23)') )
 *
 * =======================================================================
 */

$lectures = array(

//   lecture_def('Jan 16', 'No Class (CMU MLK holiday)', '', 'bold'),

//   lecture_def('Jan 18', 'Why Parallelism? Why Efficiency?', lecture_url('whyparallelism'), '',
//                    array('Assignment 1 out')),

//   lecture_def('Jan 20', 'A Modern Multi-Core Processor: Forms of Parallelism + Understanding Latency and BW', lecture_url('basicarch'), ''),

//   lecture_def('Jan 23', 'Parallel Programming Models and their Corresponding HW/SW Implementations', lecture_url('progmodels'), ''),

//   lecture_def('Jan 25', 'Parallel Programming Basics (the parallelization thought process)', lecture_url('progbasics'), '',
//                         array('Exercise 1 due (on Fri Jan 27)')),
 
//   lecture_def('Jan 30', 'GPU Architecture and CUDA Programming', lecture_url('gpuarch'), '',
//                          array('Assignment 1 due', 'Assignment 2 out')),

//   lecture_def('Feb 1', 'Performance Optimization I: Work Distribution and Scheduling', lecture_url('progperf1'), ''),

//   lecture_def('Feb 6', 'Performance Optimization II: Locality, Communication, and Contention', lecture_url('progperf2'), ''),

//   lecture_def('Feb 8', 'Parallel Application Case Studies', lecture_url('casestudies'), '',
//                        array('Exercise 2 due (on Fri Feb 10)')),

//   lecture_def('Feb 13', 'Workload-Driven Performance Evaluation', lecture_url('perfeval'), ''),

//   lecture_def('Feb 15', 'Snooping-Based Cache Coherence', lecture_url('cachecoherence1'), '',
//                        array('Assignment 2 due', 'Assignment 3 out')),

//   lecture_def('Feb 20', 'Directory-Based Cache Coherence', lecture_url('directorycoherence'), ''),

//   lecture_def('Feb 22', 'Basic Snooping-Based Multiprocessor Implementation', lecture_url('snoopimpl'), '',
//                           array('Exercise 3 due (on Fri Feb 24)')),

//   lecture_def('Feb 27', 'Memory Consistency (+ Course-So-Far Review)', lecture_url('consistency'), ''),
  
//   lecture_def('Mar 1', 'Exam I', '', 'bold'),

//   lecture_def('Mar 6', 'Scaling a Web Site: Scale-Out Parallelism, Elasticity, and Caching', lecture_url('websitescaling'), ''),

//   lecture_def('Mar 8', 'Interconnection Networks', lecture_url('interconnects'), '',
//                         array('Assignment 3 due')),
   
//   lecture_def('Mar 13-17', 'Spring Break. Partaaay!', '', 'bold'),
  
//   lecture_def('Mar 20', 'Implementing Synchronization', lecture_url('synchronization'), ''),
  
//   lecture_def('Mar 22', 'Fine-Grained Synchronization and Lock-Free Programming', lecture_url('lockfree'), '',
//                         array('Exercise 4 due (on Fri Mar 24)')),

//   lecture_def('Mar 27', 'Transactional Memory', lecture_url('transactionalmem'), ''),

//   lecture_def('Mar 29', 'Heterogeneous Parallelism and Hardware Specialization', lecture_url('heterogeneity'), ''),

//   lecture_def('Apr 3', 'Domain-Specific Parallel Programming Systems', lecture_url('dsl'), '',
//                         array('Assignment 4 due (on Tues Apr 4)')),
                        
//   lecture_def('Apr 5', 'Domain-Specific Programming Frameworks for Analyzing Graphs', lecture_url('graphdsl'), '',
//                         array('Exercise 5 due (on Fri Apr 7)')),

//   lecture_def('Apr 10', 'In-Memory Distributed Computing in Spark', lecture_url('spark'), '',
//                         array('Project Proposal due')),

//   lecture_def('Apr 12', 'Efficiently Evaluating Deep Neural Networks', lecture_url('dnn'), ''),

//   lecture_def('Apr 17', 'Parallel Deep Neural Network Training', lecture_url('dnntraining'), ''),
              
//   lecture_def('Apr 19', 'Addressing the Memory Wall', lecture_url('memory'), ''),
              
//   lecture_def('Apr 24', 'The Future of High Performance Computing', lecture_url('hpcfuture'), '',
//              array('Project checkpoint due (on Tues April 25)')),

//   lecture_def('Apr 26', 'Database Systems Do Not Scale to 1,000 CPU Cores (guest lecture by Andy Pavlo)', lecture_url('dbscaling'), '',
//             array('Exercise 6 due (on Fri April 28)')),

//   lecture_def('May 1', 'Exam 2 (evening exam)', '', 'bold'),
  
//   lecture_def('May 3', 'Course Wrap Up and Project Presentation Tips (How to Give a Clear Talk)', lecture_url('finaltips'), ''),

//   lecture_def('May 12', '6th Annual Parallelism Competition', '', 'bold', array('text'=> 'Final Projects Due'))

// lecture_def('9/27', 'Introduction', func($lectures_uploaded, 0) === ''  ? '' : lecture_url(func($lectures_uploaded, 0)), 'bold'),
// lecture_def('9/29', 'Math foundations', '', 'bold', array('text' => 'Homework 1 out')),
// lecture_def('10/4', 'Numerical integration', '', 'bold'),
// lecture_def('10/6', 'Numerical integration', '', 'bold', array('text' => 'Programming Assignment 1 out','text' => 'Homework 1 due')),
// lecture_def('10/11', 'Particle systems', '', 'bold'),
// lecture_def('10/13', 'Particle systems', '', 'bold', array('text' => 'Homework 2 out')),
// lecture_def('10/18', 'Deformable body simulation', '', 'bold'),
// lecture_def('10/20', 'Deformable body simulation', '', 'bold', array('text' => 'Homework 2 due','text' => 'Programming Assignment 1 due')),
// lecture_def('10/25', 'Fluid simulation', '', 'bold'),
// lecture_def('10/27', 'Fluid simulation', '', 'bold', array('text' => 'Homework 3 out')),
// lecture_def('11/1', 'Rigid body simulation', '', 'bold'),
// lecture_def('11/3', 'Rigid body simulation', '', 'bold', array('text' => 'Homework 3 due')),
// lecture_def('11/8', 'Character modeling ', '', 'bold'),
// lecture_def('11/10', 'Keyframe animation', '', 'bold', array('text' => 'Homework 4 out')),
// lecture_def('11/15', 'Forward kinematics', '', 'bold'),
// lecture_def('11/17', 'Inverse kinematics', '', 'bold', array('text' => 'Homework 4 due')),
// lecture_def('11/29', 'Physics-based character animation', '', 'bold'),
// lecture_def('12/1', 'Physics-based character animation', '', 'bold', array('text' => 'Homework 5 out')),
// lecture_def('12/6', 'ML-based character animation', '', 'bold'),
// lecture_def('12/8', 'ML-based character animation', '', 'bold', array('text' => 'Homework 5 due')),
// lecture_def('12/13', 'Final exam', '', 'bold'),
  );

function sortByDate($a, $b) {
    $ta = strtotime($a->lecture_date);
    $tb = strtotime($b->lecture_date);
    return (int)($ta > $tb);
}

usort($lectures_uploaded, "sortByDate");

foreach ($lectures_uploaded as $lecture){
    $lectures[] = lecture_def(str_replace("-", "/", substr($lecture->lecture_date, 5)), $lecture->title, lecture_url($lecture->shortname), 'bold');  
}

$descriptions = array(
    // "Summary of lecture topics, homeworks and assignments. Exciting highlights of A&S and why to study.",
    // "Linear algebra, transformations, basics of numerical integration for ODEs. OP examples.",
    // "Particle systems. First- vs second-order motion models. Forces models (damping, springs, gravity, force fields, etc.). Numerical integration schemes (FE,BE,SE,Midpt,RK). Symplectic methods. Continuous vs discontinuous ODEs.",
    // "Collision examples (0D,1D,2D,3D). Soft vs hard contact models. Position- vs velocity-level contact resolution. Velocity and impulses. Contact conditions. Coefficient of restitution. Planar contact. Nonplanar contact using SDFs.
    // Discuss P1: Pinball.",
    // "Broad vs narrow phase. Brute force vs culling for all-pairs CD. 
    // Narrow: Primitive computations. Signed distance fields. Separating Axis Theorem. Simple bounds (Sphere, AABB, OBB, k-DOP, convex hull). Fitting bounds.
    // Broad: Spatial subdivisions. Hashing. Trees (sphere, AABB, quadtree/octree, kd-tree). ",
    // "Discrete vs continuous collision detection. CCD tests (2D/3D), e.g., pt vs plane/triangle/sphere/SDF, Edge-edge, etc. Root finding methods. Rotational motion. Collision resolution strategies (conservative advancement, iterative schemes, etc.). Energy-based culling."
);

$titles = array(
    // "",
    // "",
    // "",
    // "",
    // "Collision Detection Methods",
    // "Continuous Collision Detection",
);

$dates = array(
    // "",
    // "",
    // "",
    // "",
    // "10/11",
    // "10/13",
);

/*
 * ===================================================================
 * =========== END OF LECTURES ARRAY =================================
 * ===================================================================
 */

$cnt = 0;
foreach ($lectures as $lecture)
{

?>

<tr>
<td class="schedule_date">
     <?php echo $lecture['date']; ?>
</td>

<td class="schedule_lecture">
     <div>
     <?php if (strlen($lecture['link']) > 0) { ?>

        <a href="<?php echo $lecture['link']; ?>"><?php echo $lecture['title']; ?></a>

     <?php } else { ?>

      <?php if ($lecture['format'] == 'bold') { ?>
           <span class="bold_text"><?php echo $lecture['title']; ?></span>
      <?php } else { ?>
        <?php echo $lecture['title']; ?>
     <?php } ?>

     <?php } ?>
     </div>

     <?php if (count($lecture['deadlines']) > 0) {
        foreach($lecture['deadlines'] as $deadline) { ?>
     <div class="small_text colored_text">
     <?php echo $deadline; ?>
     
     </div>
     <?php } } ?>
     <!-- <div class="small_text colored_text">
        <?php
     // echo $descriptions[$cnt];
     ?></div> -->
     <?php
     $cnt += 1;?>

</td>

</tr>

<?php
}
while ($cnt < count($titles)) {
?>

<tr>
<td class="schedule_date">
     <?php echo $dates[$cnt]; ?>
</td>

<td class="schedule_lecture">
     <div>
     <span class="bold_text"> <?php echo $titles[$cnt]; ?></span>
     </div>
     <!-- <div class="small_text colored_text">
        <?php
     // echo $descriptions[$cnt];
     ?></div> -->

</td>

</tr><?php
     $cnt++;
     ?>

<?php
}
?>


</table>

<div class="overview_main_item overview_ruled_element">Programming Assignments</div>
<table>
    <tr>
    <td class="schedule_date"><b>Release Date</b></td><td class="schedule_date"><b>Due date</b></td><td class="schedule_lecture"><b>Assignment title</b></td>
</tr>
<tr>

    <td class="schedule_date">10/05</td><td class="schedule_date">10/24</td>
    <td class="schedule_lecture"><a href="<?php echo "https://docs.google.com/document/d/1hSuawgrm4JGrTjaGGljJRwNsl6i9aXWZ5Ry7t89SXoc/edit#heading=h.8mvi1lgvbsd0"; ?>">P1: Pinball!</a>
    </td>    
</tr>

<tr>
    <td class="schedule_date">10/24</td><td class="schedule_date">11/09</td>
    <td class="schedule_lecture"><a href="https://canvas.stanford.edu/courses/180237/assignments/560755">P2: Attack of the Blobs!</a>
    </td>
</tr>
<tr>
    <td class="schedule_date">11/21</td><td class="schedule_date">12/12</td>
    <td class="schedule_lecture"><a href="https://canvas.stanford.edu/courses/180237/assignments/566637">P3: Strike a Pose!</a>
    </td>
</tr>

<!-- <tr>

    <td class="schedule_date">10/18</td><td class="schedule_date"></td><td class="schedule_lecture">Written Homework 2: Numerical integration</td>
    
</tr>
<tr>

    <td class="schedule_date">11/08</td><td class="schedule_date"></td><td class="schedule_lecture">Written Homework 3: Rigid body dynamics and kinematics</td>
    
</tr>
<tr>

    <td class="schedule_date">11/29</td><td class="schedule_date"></td><td class="schedule_lecture">Written Homework 4: Animation control</td>
    
</tr> -->


</table>

<div class="overview_main_item overview_ruled_element">Written Homework</div>

<!-- <div style="padding-bottom: 15px;"><div> To be released.</div></div> -->

<table>
    <tr>
    <td class="schedule_date"><b>Release Date</b></td><td class="schedule_date"><b>Due date</b></td><td class="schedule_lecture"><b>Homework title</b></td>
</tr>
<tr>

    <td class="schedule_date">10/2</td><td class="schedule_date">10/10</td><td class="schedule_lecture"><a href="<?php echo "https://canvas.stanford.edu/courses/180237/assignments/556812"; ?>">HW 1: Math Foundations</a>
</tr>

<tr>

    <td class="schedule_date">10/19</td><td class="schedule_date">10/30</td><td class="schedule_lecture"><a href="<?php echo "https://canvas.stanford.edu/courses/180237/assignments/560141"; ?>">HW 2: Collisons and Deformation</a>
</tr>
<tr>

    <td class="schedule_date">11/10</td><td class="schedule_date">11/24</td><td class="schedule_lecture"><a href="<?php echo "https://canvas.stanford.edu/courses/180237/assignments/564575"; ?>">HW 3: Rigid Body and 3D Rotation</a>
</tr>
<tr>

    <td class="schedule_date">11/30</td><td class="schedule_date">12/07</td><td class="schedule_lecture"><a href="<?php echo "https://canvas.stanford.edu/courses/180237/assignments/569333"; ?>">HW 4: Kinematics and Physics-based Motions</a>
</tr>


</table>

<!-- <div class="overview_main_item overview_ruled_element">Acknowledgments</div>

<p> Special thanks to the <a href="http://www.intel.com">Intel
Corporation</a>, the <a href="http://www.nvidia.com">NVIDIA
Corporation</a>, and to <a href="http://www.dell.com">DELL</a> for
equipment donations and/or financial support for course development.
<a href="http://www.cs.cmu.edu/~tcm">Todd Mowry</a> created the
original version of 15-418 and much of the structure of his innovative
course persists today. Thanks to Matt Pharr for technical assistance
with ISPC. Alex Reece, Manish Burman, and Cary Yang developed the
course web site.  </p> -->

<div>&nbsp;</div>
<div>&nbsp;</div>

</div>  <!-- end of home_container -->
