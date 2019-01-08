<?php include_once 'header.php'; ?>


<ul>
  <li>
    <div class="sidenav" id="sidenav" style="height:100%;width:160px;position:fixed;z-index:1;top:0;left:0;background-color:#E7E7E7;overflow-x:hidden;padding-top:10px;margin-top:56px;" >
      <a href="#introduction" style="padding-top:15px;padding-bottom:10px;padding-right:0px;padding-left:25px;font-size:15px;color:#818181;display:block;font-weight:bold;" >Introduction</a>
      <a href="#variables" style="padding-top:15px;padding-bottom:10px;padding-right:0px;padding-left:25px;font-size:15px;color:#818181;display:block;font-weight:bold;" >Variables</a>
      <a href="#datatypes" style="padding-top:15px;padding-bottom:10px;padding-right:0px;padding-left:25px;font-size:15px;color:#818181;display:block;font-weight:bold;" >Data Types</a>
      <a href="#loops" style="padding-top:15px;padding-bottom:10px;padding-right:0px;padding-left:25px;font-size:15px;color:#818181;display:block;font-weight:bold;" >Loops</a>
    </div>
  </li>

  <li>
   <div data-spy="scroll" data-target="#sidenav" id="leftscroll1" style="margin-left:160px;margin-right:100px;padding-top:0px;padding-bottom:0px;padding-right:10px;padding-left:10px;font-size:20px;" >
      <div id="introduction" class="spacer" style="padding-top:70px;margin-top:0px;margin-bottom:0px;margin-right:0px;margin-left:0px;font-size:25px;" ></div>
      <h4 >Introduction</h4>
      <p>Java is a set of computer software and specifications developed by Sun Microsystems, which was later acquired by the Oracle Corporation, that provides a system for developing application software and deploying it in a cross-platform computing environment. Java is used in a wide variety of computing platforms from embedded devices and mobile phones to enterprise servers and supercomputers.
         Writing in the Java programming language is the primary way to produce code that will be deployed as byte code in a Java virtual machine (JVM); byte code compilers are also available for other languages, including Ada, JavaScript, Python, and Ruby. In addition, several languages have been designed to run natively on the JVM, including Scala, Clojure and Apache Groovy. Java syntax borrows heavily from C and C++, but object-oriented features are modeled after Smalltalk and Objective-C.[10] Java eschews certain low-level constructs such as pointers and has a very simple memory model where every object is allocated on the heap and all variables of object types are references. Memory management is handled through integrated automatic garbage collection performed by the JVM.
         On November 13, 2006, Sun Microsystems made the bulk of its implementation of Java available under the GNU General Public License (GPL).
       The latest version is Java 9, the second of the two supported (with e.g. security updates) versions as of 2017. Oracle (and others) has announced that using older versions (other than Java 8) of their JVM implementation presents serious risks, due to unresolved security issues.

   </div>

   </p>
   <div data-spy="scroll" data-target="#sidenav" id="leftscroll2" style="margin-left:160px;margin-right:100px;padding-top:0px;padding-bottom:0px;padding-right:10px;padding-left:10px;font-size:20px;" >
     <div id="variables" class="spacer" style="padding-top:70px;margin-top:0px;margin-bottom:0px;margin-right:0px;margin-left:0px;" ></div>
      <h4>Variables</h4>
      <p>The Java platform is a suite of programs that facilitate developing and running programs written in the Java programming language. A Java platform will include an execution engine (called a virtual machine), a compiler and a set of libraries; there may also be additional servers and alternative libraries that depend on the requirements. Java is not specific to any processor or operating system as Java platforms have been implemented for a wide variety of hardware and operating systems with a view to enable Java programs to run identically on all of them. Different platforms target different classes of device and application domains:
       Java Card: A technology that allows small Java-based applications (applets) to be run securely on smart cards and similar small-memory devices.
       Java ME (Micro Edition): Specifies several different sets of libraries (known as profiles) for devices with limited storage, display, and power capacities. It is often used to develop applications for mobile devices, PDAs, TV set-top boxes, and printers.
       Java SE (Standard Edition): For general-purpose use on desktop PCs, servers and similar devices.
       Java EE (Enterprise Edition): Java SE plus various APIs which are useful for multi-tier client–server enterprise applications.
       The Java platform consists of several programs, each of which provides a portion of its overall capabilities. For example, the Java compiler, which converts Java source code into Java bytecode (an intermediate language for the JVM), is provided as part of the Java Development Kit (JDK). The Java Runtime Environment (JRE), complementing the JVM with a just-in-time (JIT) compiler, converts intermediate bytecode into native machine code on the fly. The Java platform also includes an extensive set of libraries.
       The essential components in the platform are the Java language compiler, the libraries, and the runtime environment in which Java intermediate bytecode executes according to the rules laid out in the virtual machine specification.
      </p>
   </div>
   <div data-spy="scroll" data-target="#sidenav" id="leftscroll3" style="margin-left:160px;margin-right:100px;padding-top:0px;padding-bottom:0px;padding-right:10px;padding-left:10px;font-size:20px;" >
     <div id="datatypes" class="spacer" style="padding-top:70px;margin-top:0px;margin-bottom:0px;margin-right:0px;margin-left:0px;" ></div>
     <h4 >Data Types</h4>
     <p>
     In most modern operating systems (OSs), a large body of reusable code is provided to simplify the programmer's job. This code is typically provided as a set of dynamically loadable libraries that applications can call at runtime. Because the Java platform is not dependent on any specific operating system, applications cannot rely on any of the pre-existing OS libraries. Instead, the Java platform provides a comprehensive set of its own standard class libraries containing many of the same reusable functions commonly found in modern operating systems. Most of the system library is also written in Java. For instance, the Swing library paints the user interface and handles the events itself, eliminating many subtle differences between how different platforms handle components.
     The Java class libraries serve three purposes within the Java platform. First, like other standard code libraries, the Java libraries provide the programmer a well-known set of functions to perform common tasks, such as maintaining lists of items or performing complex string parsing. Second, the class libraries provide an abstract interface to tasks that would normally depend heavily on the hardware and operating system. Tasks such as network access and file access are often heavily intertwined with the distinctive implementations of each platform. The java.net and java.io libraries implement an abstraction layer in native OS code, then provide a standard interface for the Java applications to perform those tasks. Finally, when some underlying platform does not support all of the features a Java application expects, the class libraries work to gracefully handle the absent components, either by emulation to provide a substitute, or at least by providing a consistent way to check for the presence of a specific feature.
     </p>
   </div>
   <div data-spy="scroll" data-target="#sidenav" id="leftscroll4" style="margin-left:160px;margin-right:100px;padding-top:0px;padding-bottom:0px;padding-right:10px;padding-left:10px;font-size:20px;" >
     <div id="loops" class="spacer" style="padding-top:70px;margin-top:0px;margin-bottom:0px;margin-right:0px;margin-left:0px;" ></div>
      <h4 >Loops</h4>
      <p>
       The Java platform and language began as an internal project at Sun Microsystems in December 1990, providing an alternative to the C++/C programming languages. Engineer Patrick Naughton had become increasingly frustrated with the state of Sun's C++ and C application programming interfaces (APIs) and tools, as well as with the way the NeWS project was handled by the organization. Naughton informed Scott McNealy about his plan of leaving Sun and moving to NeXT; McNealy asked him to pretend he was God and send him an e-mail explaining how to fix the company. Naughton envisioned the creation of a small team that could work autonomously without the bureaucracy that was stalling other Sun projects. McNealy forwarded the message to other important people at Sun, and the Stealth Project started. [21]
       The Stealth Project was soon renamed to the Green Project, with James Gosling and Mike Sheridan joining Naughton. Together with other engineers, they began work in a small office on Sand Hill Road in Menlo Park, California. They aimed to develop new technology for programming next-generation smart appliances, which Sun expected to offer major new opportunities.[22]
       The team originally considered using C++, but rejected it for several reasons. Because they were developing an embedded system with limited resources, they decided that C++ needed too much memory and that its complexity led to developer errors. The language's lack of garbage collection meant that programmers had to manually manage system memory, a challenging and error-prone task. The team also worried about the C++ language's lack of portable facilities for security, distributed programming, and threading. Finally, they wanted a platform that would port easily to all types of devices
      </p>
   </div>
  </li>
  </ul>

<?php include_once 'footer.php'; ?>
