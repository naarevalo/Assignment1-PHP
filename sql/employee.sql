

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;




CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `employee_position` varchar(40) NOT NULL,
  `hire_date` date NOT NULL,
  `hours_worked` int(11) NOT NULL,
  `phone` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `user` (`id`, `name`, `employee_position`, `hire_date`, `hours_worked`, `phone`) VALUES
(1, 'Natalia', 'Engineer', '2023-10-07', 8, 2147483647),
(2, 'Tatiana', 'Doctor', '2023-10-01', 15, 2147483647),
(3, 'Esteban', 'Administrator', '2023-08-15', 150, 2147483647),
(4, 'Manuel', 'lawyer', '2023-07-04', 200, 2147483647),
(5, 'Carolina', ' Graphic designer', '2023-09-02', 100, 2147483647),
(6, 'Helena', 'Teacher', '2023-08-13', 210, 2147483647),
(7, 'Mary', 'Psycology', '2023-05-18', 300, 2147483647),
(8, 'Julio', 'Social worker', '2023-03-27', 600, 2147483647);


ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
