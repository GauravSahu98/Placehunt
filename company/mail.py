
import smtplib
import sys

message =  """ \
From: <2016.gaurav.sahu@ves.ac.in>
To: <""" + sys.argv[2] + """>
Subject: Congratulations """ + sys.argv[1] + """. You have been shortlisted!

Hey """ + sys.argv[1] + """! Congrats on making it to the shortlist for the position of a """ + sys.argv[4] + """ at """ + sys.argv[3] + """
We'll get in touch with you soon!

Regards,
HR Team, """ + sys.argv[3] + """
"""

server = smtplib.SMTP('smtp.gmail.com', '587')
server.starttls()
try:
    server.login('2016.gaurav.sahu@ves.ac.in', 'sowhat?!')
    server.sendmail('2016.gaurav.sahu@ves.ac.in', sys.argv[2], message)
    print('1')
except Exception as exe:
    print('0')

