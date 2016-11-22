_NOTE: Roombalib is currently work in progress and must be considered unstable_

# roombalib


Roombalib enables developers to program against an interface of the Roomba vacuum cleaning robot.
A number of Roomba models are equipped with a PS/2 connector that can be used to communicate with the robot.
This communication layer is initially out of scope for the roombalib, because there is a more convenient way
to communicate using WiFi. Some more expensive Roomba cleaners come with built-in WiFi. The roombalib library is
initially intended to be used with the RooWifi (http://www.roowifi.com/) Wifi adapter. 

## RooWifi adapter
The RooWifi module adds Wifi connectivity to supported Roomba models and offers two options
for communicating with your Roomba over TCP/IP:

- Gateway/transparent mode: In this mode the RooWifi module acts as a transparent gateway for communicating 
with the Roomba using the native serial communications (iRobot SCI specification) protocol over Wifi.

- Webaccess: Roowifi has a webserver on board serving html pages for interaction with the Roomba. 
This interface makes use of xml endpoints for reading device and sensor states (telemetry), and an http interface for 
executing commands that emulate pressing the buttons of your Roomba.

This library is primarily aimed at the transparant mode, because that wil implement the native Roomba SCI specs. 
The other modes are specific for RooWifi and can be emulated or implemented using the native interface.

### Communicating with the Roomba over TCP/IP
The RooWifi module offers wireless connectivity to the PS/2 port using standard TCP sockets. More specifically the 
RooWifi module listens on port 9001 for SCI commands. When the transparent mode is active the webinterface (http) is
automatically disabled.

