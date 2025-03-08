CREATE TABLE issues (
  id INT AUTO_INCREMENT PRIMARY KEY,
  issue_type VARCHAR(255) NOT NULL,
  location TEXT,
  description TEXT,
  reported_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- Insert sample data into the issues table
INSERT INTO issues (issue_type, location, description) VALUES
('waste management', 'Location A', 'Description of waste management issue'),
('road management', 'Location B', 'Description of road management issue'),
('water management', 'Location C', 'Description of water management issue'),
('Electricity', 'Location D', 'Description of Electricity issue');
-- Query to retrieve distinct issue types
SELECT DISTINCT issue_type FROM issues;


INSERT INTO `admin_login` ( `admin_Username`, `admin_Password`) VALUES
('admin1', '#miska1263');