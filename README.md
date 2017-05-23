[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/Breezometer/functions?utm_source=RapidAPIGitHub_BreezometerFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# Breezometer Package
Connect to the Breezometer Air Quality API to get global, local, real-time data on air quality. Test an API call and export the code snippet into your app.
* Domain: [breezometer.com](https://breezometer.com)
* Credentials: apiKey

## How to get credentials: 
1. Sign up in [breezometer.com](https://breezometer.com)
2. Navigate to Developers->Api login
3. Add a new Api Key
 
## Breezometer.getAirQuality
You can get air quality data by Latitude and Longitude (Geocoding)

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your BreezoMeter API key.
| coordinates   | Map     | Geographic coordinate. Latitude and longitude. Example: ```51.491751537714705,-0.02414792776107788```
| fields   | String     | Set of fields separated by commas
| lang     | Select     | Response language. Support English(“en”) and Hebrew(“he”).

## Breezometer.getSpecificDateAirQuality
You can get air quality data by Latitude and Longitude (Geocoding)

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your BreezoMeter API key.
| coordinates   | Map     | Geographic coordinate. Latitude and longitude. Example: ```51.491751537714705,-0.02414792776107788```
| datetime | DatePicker     | The specific time you wish to get air quality data for. Date and time format: YYYY-MM-DDTHH:mm:SS
| lang     | Select     | Response language. Support English(“en”) and Hebrew(“he”).

## Breezometer.getAirQualityHistoryForDateRange
You can get history air quality data for a range of dates in a specific location (Latitude and Longitude) with a start and end timestamps that will provide an array of results.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| Your BreezoMeter API key.
| coordinates   | Map     | Geographic coordinate. Latitude and longitude. Example: ```51.491751537714705,-0.02414792776107788```
| start_datetime| DatePicker     | The specific start time you wish to get air quality data for. Date and time format: YYYY-MM-DDTHH:mm:SS
| end_datetime  | DatePicker     | The specific end time you wish to get air quality data for. Date and time format: YYYY-MM-DDTHH:mm:SS
| interval      | Number     | A time interval represents a period of time (hours) between two BAQI objects. You can choose an interval value (Integer) between 1-24 hours.
| lang          | Select     | Response language. Support English(“en”) and Hebrew(“he”).

## Breezometer.getAirQualityForecast
###### (not available in trial version)
You can get air quality data forecasts for a specific location for the next 24 hours

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| Your BreezoMeter API key.
| coordinates   | Map     | Geographic coordinate. Latitude and longitude. Example: ```51.491751537714705,-0.02414792776107788```
| hours    | Number     | Hours represents the period of time for the Forecast data you’ll receive.You can choose any value (integer) up to 96 hours. The default period: 24 hours 
| lang     | Select     | Response language. Support English(“en”) and Hebrew(“he”).

