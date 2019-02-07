FROM registry.access.redhat.com/rhscl/php-70-rhel7
ADD index.php .
ENV BACKEND_HOST_NAME example.com
EXPOSE 8080
CMD ["php", "-S", "0.0.0.0:8080"]
