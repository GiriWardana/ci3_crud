How to RUN this Program. (running on UBUNTU)

1.
Download XAMPP (SKIP if you can access /opt/lampp/lampp
-------------------------------------------------------------------------------------
Download XAMPP:
Visit the official Apache Friends website to download the latest version of XAMPP for Linux. You can do this through your web browser or via the terminal using wget command. For example:

arduino
Copy code
wget https://www.apachefriends.org/xampp-files/{latest-version}.tar.gz
Extract the Archive:
Once the download is complete, navigate to the directory where the downloaded file is located and extract the archive using the following command:

bash
Copy code
tar xvfz xampp-linux-x64-{version}.tar.gz -C /opt
This command will extract the contents of the XAMPP archive to the /opt directory.

Run the Installer:
After extraction, navigate to the /opt directory:

bash
Copy code
cd /opt/lampp
Then, run the XAMPP installer script:

bash
Copy code
sudo ./xampp start
This command will start the XAMPP services. You may be prompted for your password.

Accessing XAMPP:
Once XAMPP is running, you can access it via a web browser by typing localhost or 127.0.0.1 in the address bar. This will display the XAMPP dashboard where you can manage your server components.

Additional Configurations:

If you want XAMPP to start automatically when your system boots up, you can create a symbolic link to the /opt/lampp/lampp script in the /etc/init.d directory and use the update-rc.d command to update the runlevel information for the XAMPP service.
You may also need to adjust file permissions or configurations depending on your specific use case.
That's it! You should now have XAMPP installed and running on your Ubuntu system.
------------------------------------------------------------------------------------------------------


2. Git Pull 
---------------------------------------------------------------------------------------------
open terminal
cd /opt/lampp/htdocs
remove all file and folder in this folder, or you can move it
then 
git clone git@github.com:GiriWardana/ci3_crud.git
---------------------------------------------------------------------------------------------


3. Import database 'bakrie.sql'
---------------------------------------------------------------------------------------------
open http://localhost/phpmyadmin/ (ensure you have run apache)
import the bakrie.sql into your workbence
---------------------------------------------------------------------------------------------


4. Open localhost
---------------------------------------------------------------------------------------------
open http://localhost
enjoy this code
---------------------------------------------------------------------------------------------







