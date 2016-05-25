import json
from pprint import pprint


class Vehicles:
    def __init__(self):
        self.vehicles = self.read_json('vehicles.json')
        self.vehicle_groups = self.read_json('vehicle_groups.json')

    def read_json(self, file):
        with open(file) as data_file:
            return json.load(data_file)

    # YOUR FUNCTION HERE
