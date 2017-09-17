# Start kernel
import subprocess
print("Good")

subprocess.call("php /routing/service.php")
subprocess.call("php /database/data.php")
subprocess.call("lua -i /lua/startup.lua)
