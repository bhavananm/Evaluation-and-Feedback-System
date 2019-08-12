-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2019 at 07:08 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userdb`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `getdata` ()  SELECT `fid`,`result`,(CASE
 WHEN result BETWEEN 8 and 10 THEN 'excellent'
 WHEN result BETWEEN 5 and 8 THEN 'good'
 WHEN result BETWEEN 3 AND 4 THEN 'satisfactory'
 ELSE 'poor'
 END) as 'category' from oresult$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `ds`
--

CREATE TABLE `ds` (
  `id1` varchar(3) NOT NULL,
  `qsn` varchar(200) NOT NULL,
  `opt1` varchar(200) NOT NULL,
  `opt2` varchar(200) NOT NULL,
  `opt3` varchar(200) NOT NULL,
  `opt4` varchar(200) NOT NULL,
  `ans` varchar(200) NOT NULL,
  `level` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ds`
--

INSERT INTO `ds` (`id1`, `qsn`, `opt1`, `opt2`, `opt3`, `opt4`, `ans`, `level`) VALUES
('1.1', 'push() and pop() is available in?', 'queues', 'stacks', 'lists', 'trees', 'stacks', 'easy'),
('1.2', 'Minimum number of spanning tree in a connected graph is', 'n', 'n^n', '0', '1', '1', 'easy'),
('1.3', 'Which of the following does not divide the list?', 'linear search', 'binary search', 'merge sort', 'quick sort', 'linear search', 'easy'),
('1.4', 'which is not a datastructure?', 'trees', 'lists', 'graph', 'int', 'int', 'easy'),
('1.5', 'From where does the insertion and deletion of elements get accomplished in Queues? ', 'Front & Rear ends respectively', 'Rear & Front ends respectively', 'Only Front ends', 'Only Rear ends', 'Rear & Front ends respectively', 'easy'),
('1.6', 'Which value is assigned/set at front and rear ends during the Initialization of a Queue? ', '0', '1', '-1', 'infinity', '-1', 'easy'),
('1.7', ' How do the nested calls of the function get managed?', 'Through Queues', 'Through Stacks', 'Through Trees', 'Through Graphs', 'Through Stacks', 'easy'),
('1.8', 'Which direction of scanning is suitable for the evaluation of a prefix expression? ', 'Left to Left', 'Right to Right', 'Left to Right', 'Right to Left', 'Right to Left', 'easy'),
('2.1', 'Which one of the following is an application of Stack Data Structure? ', 'Managing function calls ', 'The stock span problem ', 'Arithmetic expression evaluation ', 'All of the above \r\n\r\n', 'All of the above \r\n\r\n', 'moderate'),
('2.2', 'In graphs, A hyperedge is an edge that is allowed to take on any number of ', 'Vertices ', 'edges', 'both a and b ', 'labels \r\n\r\n', 'Vertices ', 'moderate'),
('2.3', 'What do the leaves of an expression tree represent? ', 'Operand', 'Operator', 'Operation', 'All of the Above', 'Operand', 'moderate'),
('2.4', 'What does a node possessing zero degree in Trees known as? ', 'Branch Node', 'Root Node', 'Leaf Node', 'Trunk Node', 'Leaf Node', 'moderate'),
('2.5', 'Which type of linked list comprises the adjacently placed first and the last elements? ', 'Singly Linked List', 'Doubly Linked List', 'Circular Linked List', 'All of the above', 'Circular Linked List', 'moderate'),
('2.6', 'Traversal of a linked list always starts from the __________. ', 'First Node', 'Middle Node', 'Last Node', 'None of the Above', 'First Node', 'moderate'),
('2.7', 'Which is the most suitable construct utilized for traversing in a Circular Linked List?', 'do-while', 'while', 'if', 'for', 'do-while', 'moderate'),
('2.8', 'Which of the following is / are the Applications of a Linked List? ', 'Polynomial', 'Set', 'Sparse matrix', 'All of the above', 'All of the above', 'moderate'),
('3.1', ' A linear collection of data elements where the linear node is given by means of pointer is called? ', 'Linked list ', 'Node list ', 'Primitive list \r\n ', 'None of the above', 'Linked list ', 'hard'),
('3.2', 'The complexity of multiplying two matrices of order m*n and n*p is ', 'mnp ', 'mp ', 'mn ', 'np ', 'mnp ', 'hard'),
('3.3', 'How many pointers are necessarily changed for the insertion in a Linked List? ', 'One', 'Two', 'Three', 'Five', 'Two', 'hard'),
('3.4', 'The concept of topological sorting significantly deals with an ordering of Vertices in  _________.', 'A Directed Cyclic Graph', 'An Undirected Cyclic Graph', ' A Directed Linear Graph', 'An Undirected Linear Graph', 'A Directed Cyclic Graph', 'hard'),
('3.5', 'Which kind of Special Vertex is not required while treating a Tree as a Graph?', 'Branch', 'Node', 'Root', 'None of the above', 'Root', 'hard'),
('3.6', 'Which algorithm should not be used for a Dense Graph? ', 'Prims algorithm', 'Kruskal algorithm', 'Both a & b', 'None of the above', 'Kruskal algorithm', 'hard'),
('3.7', 'Which value of degree is specified or defined for an Isolated Vertex? ', 'Zero', 'One', 'Infinity', 'Unpredictable', 'Zero', 'hard'),
('3.8', 'How many nested loops are present in Prims Algorithm? ', 'Two', 'Three', 'Four', 'Infinite', 'Two', 'hard');

-- --------------------------------------------------------

--
-- Table structure for table `dsr1`
--

CREATE TABLE `dsr1` (
  `id1` varchar(10) NOT NULL,
  `result` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `fid` varchar(6) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `faddress` varchar(30) DEFAULT NULL,
  `fphone` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`fid`, `fname`, `subject`, `faddress`, `fphone`) VALUES
('fid01', 'sheela', 'DBMS', 'JP Nagar', '9986589721'),
('fid02', 'reshma', 'ME', 'Jaynagar', '9807098674'),
('fid03', 'sneha', 'CN', 'kormangla', '8797956754'),
('fid04', 'shrivatsa', 'Java', 'HSK', '9482639278'),
('fid05', 'sajitha', 'Dot Net', 'RR Nagar', '8639263729');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(2) NOT NULL,
  `qsn` varchar(200) NOT NULL,
  `opt1` varchar(200) NOT NULL,
  `opt2` varchar(200) NOT NULL,
  `opt3` varchar(200) NOT NULL,
  `opt4` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `qsn`, `opt1`, `opt2`, `opt3`, `opt4`) VALUES
(1, 'how audible is the lecturer?', 'Excellent', 'Good', 'Satisfactory', 'Poor'),
(2, 'How well does the faculty explain real time application', 'Excellent', 'Good', 'Satisfactory', 'Poor'),
(3, 'How is the interaction of lecturer with the students?', 'Excellent', 'Good', 'Satisfactory', 'Poor'),
(4, 'How fair is the lecturer in evaluation?', 'Excellent', 'Good', 'Satisfactory', 'Poor'),
(5, 'How would you rate the overall experience with the lecturer', 'Excellent', 'Good', 'Satisfactory', 'Poor');

-- --------------------------------------------------------

--
-- Table structure for table `java`
--

CREATE TABLE `java` (
  `id2` varchar(3) NOT NULL,
  `qsn` varchar(200) NOT NULL,
  `opt1` varchar(200) NOT NULL,
  `opt2` varchar(200) NOT NULL,
  `opt3` varchar(200) NOT NULL,
  `opt4` varchar(200) NOT NULL,
  `ans` varchar(200) NOT NULL,
  `level` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `java`
--

INSERT INTO `java` (`id2`, `qsn`, `opt1`, `opt2`, `opt3`, `opt4`, `ans`, `level`) VALUES
('1.1', 'Generics does not work with? ', 'Set  ', 'List ', 'Tree', 'Array', 'Array', 'easy'),
('1.2', 'How to sort an array? ', 'Array.sort()', 'Arrays.sort() ', 'Collection.sort() ', 'System.sort() ', 'Arrays.sort() ', 'easy'),
('1.3', 'A package is a collection of', 'Classes ', 'Interfaces', 'Editing tools', 'Classes and interfaces', 'Classes and interfaces', 'easy'),
('1.4', 'Basic Java language functions are stored in which of the following java package?', 'java.lang', 'java.io', 'java.net', 'java.util ', 'java.lang', 'easy'),
('1.5', 'Which of the following is a member of the java.lang package?', 'List', 'Queue', 'Math', 'Stack', ' Queue', 'easy'),
('1.6', 'Which of the following has a method names flush( )?', 'Input stream', 'Output Stream', 'Reader stream', 'Input reader stream', 'Output Stream', 'easy'),
('1.7', 'What is the fundamental unit of information of writer streams?', 'Characters', 'Bytes', 'Files', 'Records', 'Characters', 'easy'),
('1.8', 'File class is included in which package?', 'java.io package', 'java.lang package', 'java.awt package', 'java.net.package', 'java.io package', 'easy'),
('2.1', 'Where is array stored in memory? ', 'heap space ', 'stack space \r\n ', 'heap space and stack space ', 'first generation memory ', 'heap space ', 'moderate'),
('2.2', 'An array elements are always stored in ________ memory locations? ', 'Sequential ', 'Random \r\n ', 'Sequential and Random', 'Binary search ', 'Sequential ', 'moderate'),
('2.3', 'What is the sequence of major events in the life of an applet?', 'start, init , stop , destroy', ' init, start , destroy, stop', 'init, start, stop, destroy', 'init, start, destroy', 'init, start, stop, destroy', 'moderate'),
('2.4', 'What is the return type of the method getID() defined in AWTEvent class', 'long', 'Object', 'Component ', 'Int ', 'Int ', 'moderate'),
('2.5', ' Which of the following events will cause a thread to die?', 'The method sleep( ) is called', 'The method wait( ) is called', 'Execution of the start( ) method ends', 'Execution of the run( ) method ends', 'Execution of the run( ) method ends', 'moderate'),
('2.6', 'What will be the result of the expression 13 & 25?', '38', '25', '9', '12', '9', 'moderate'),
('2.7', 'Which one of the following class definitions is a valid definition of a class that cannot be extended?', 'class Link { }', 'final class Link { }', 'abstract class Link { }', 'static class Link { }', 'final class Link { }', 'moderate'),
('2.8', 'The java run time system automatically calls this method while garbage collection.', 'finalizer() ', 'finalize()', 'finally()', 'finalized()', 'finalize()', 'moderate'),
('3.1', 'Which of the following is Faster, StringBuilder or StringBuffer?', 'StringBuilder ', 'StringBuffer ', 'Both of the above ', 'none of the above', 'StringBuilder ', 'hard'),
('3.2', 'To prevent any method from overriding, we declare the method as, ', 'static', 'const ', 'final ', 'abstract ', 'final ', 'hard'),
('3.3', ' Which of the following is not a component of Java Integrated Development Environment (IDE)?', 'Net Beans', 'Borland’s Jbuilder', 'Symantec’s Visual Café', 'Microsoft Visual Fox Pro', 'Symantec’s Visual Café', 'hard'),
('3.4', ' In Java, a character constant’s value is its integer value in the ………………………character set', 'EBCDIC', 'Unicode', 'ASCII', 'Binary', 'Unicode', 'hard'),
('3.5', ' Re-implementing an inherited method in a sub class to perform a different task from the parent class is called', 'extending', 'Binding', 'Transferring', 'Hiding', 'extending', 'hard'),
('3.6', 'What is the error in the following class definitions?\r\n\r\nAbstract class xy\r\n{\r\nabstract sum (int x, int y) { }\r\n}', 'Class header is not defined properly', 'Constructor is not defined', 'Method is not defined properly', 'Method is defined properly', 'Method is not defined properly', 'hard'),
('3.7', 'Which of these field declarations are legal within the body of an interface?', 'Private final static int answer = 42', 'public static int answer=42', 'final static answer =42', 'int answer', 'public static int answer=42', 'hard'),
('3.8', 'Given a class named Book, which one of these is a valid constructor declaration for the class?', 'Book(Book b) { }', 'Book Book() { }', 'private final Book() { }', 'void Book() { }', 'Book(Book b) { }', 'hard');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `userid` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(8) NOT NULL,
  `sem` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`userid`, `username`, `password`, `sem`) VALUES
('bg16001', 'bhavana', 'abcd', 5),
('bg16002', 'nishika', 'abab', 5),
('bg16010', 'nithya', '1111', 5),
('bg16025', 'hindu', 'hindu', 5),
('fid01', 'sheela', '1111', 5),
('fid02', 'reshma', '1212', 5),
('fid03', 'sneha', '9999', 5),
('fid04', 'shrivatsa', '1313', 5),
('fid05', 'sajitha', '9090', 5);

-- --------------------------------------------------------

--
-- Table structure for table `oresult`
--

CREATE TABLE `oresult` (
  `fid` varchar(6) NOT NULL,
  `result` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `oresult`
--

INSERT INTO `oresult` (`fid`, `result`) VALUES
('fid01', '7.6');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `address` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `password` varchar(8) NOT NULL,
  `sem` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `address`, `phone`, `password`, `sem`) VALUES
('bg16001', 'bhavana', 'davangere', '8748787392', 'abcd', 5),
('bg16002', 'nishika', 'fardabad', '9800765754', 'abab', 5),
('bg16010', 'nithya', 'bagalore', '9747873673', '1111', 5),
('bg16025', 'hindu', 'bangalore', '9874563314', 'hindu', 5),
('fid01', 'sheela', 'Jayanagar', '8968587686', '1111', 5),
('fid02', 'reshma', 'J P Nagar', '9807098674', '1212', 5),
('fid03', 'sneha', 'BSK', '9873027812', '9999', 5),
('fid04', 'shrivatsa', 'HSK', '9849578342', '1313', 5),
('fid05', 'sajitha', 'RR Nagar', '8388738291', '9090', 5);

--
-- Triggers `user`
--
DELIMITER $$
CREATE TRIGGER `getdata` AFTER INSERT ON `user` FOR EACH ROW INSERT INTO login VALUES(NEW.userid,NEW.username,NEW.password,NEW.sem)
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ds`
--
ALTER TABLE `ds`
  ADD PRIMARY KEY (`id1`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `java`
--
ALTER TABLE `java`
  ADD PRIMARY KEY (`id2`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
