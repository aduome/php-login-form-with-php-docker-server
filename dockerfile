FROM php
COPY ./index.php ./
COPY ./login.php ./
COPY ./logout.php ./
COPY ../styles.css ./
EXPOSE 8000
CMD ["php", "-S", "0.0.0.0:8000"]