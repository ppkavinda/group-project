#!/usr/bin/env python

from subprocess import call
import tornado.ioloop
import tornado.web
import pprint

class MyDumpHandler(tornado.web.RequestHandler):
    def post(self):
        # pprint.pprint(self.request)
        # pprint.pprint(self.request.body)
        call(['git pull'])

if __name__ == "__main__":
    tornado.web.Application([(r"/.*", MyDumpHandler),]).listen(1995)
    tornado.ioloop.IOLoop.instance().start()
